<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Profession;
use App\Models\Race;
use App\Models\Hair;
use App\Models\Eye;
use App\Models\CareerPath;
use App\Models\BasicAbility;
use App\Models\AdvancedAbility;
use App\Models\BasicSpecialization;
use App\Models\AdvancedSpecialization;
use App\Models\Talent;

class TestController extends Controller
{
    public function Test()
    {
        $professions = Profession::with([
            'careerPaths' => function ($query) {
                $query->with([
                    'basicAbilities' => function ($query) {
                        $query->with('basicSpecialization');
                    }
                ]);
            }
        ])->get();
        return view('test')->with('professions', $professions);
    }

    public function Create()
    {
        $talents = Talent::all();
        $career_path = CareerPath::whereBetween('id_career_path', [201, 260])->get();
        $career_path_talents = DB::select('SELECT * FROM career_path_talent');

        $cpt_array = array();

        foreach ($career_path_talents as $cpt) {
            if (!isset($cpt_array[$cpt->id_career_path])) {
                $cpt_array[$cpt->id_career_path] = array();
            }
            array_push($cpt_array[$cpt->id_career_path], $cpt->id_talent);
        }
        $selects = array();
        foreach ($career_path as $cp) {
            if (!isset($selects[$cp->id_career_path])) {
                $selects[$cp->id_career_path] = array();
            }
            if (isset($cpt_array[$cp->id_career_path])) {
                array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, $cpt_array[$cp->id_career_path][0]));
                array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, null));
                array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, $cpt_array[$cp->id_career_path][1]));
                if (isset($cpt_array[$cp->id_career_path][2])) {
                    array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, $cpt_array[$cp->id_career_path][2]));
                } else {
                    array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, null));
                }
            } else {
                array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, null));
                array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, null));
                array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, null));
                array_push($selects[$cp->id_career_path], $this->find_talent_in_array($cp, $talents, null));
            }

        }
        return view('create')->with('career_path', $career_path)->with('selects', $selects);
    }

    private function find_talent_in_array($cp, $talents, $talent = null)
    {
        $select = '<select class="char"><option value="0">Selecciona talento</option>';
        $found = false;
        foreach ($talents as $t) {
            if ($t->id_talent == $talent && !$found) {
                $select .= '<option selected value="' . $t->id_talent . '">' . $t->name . '</option>';
                $found = true;
            } else {
                $select .= '<option value="' . $t->id_talent . '">' . $t->name . '</option>';
            }
        }
        $select .= '</select>';
        $select = html_entity_decode($select);
        return $select;
    }
}