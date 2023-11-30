<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $characteristics = Characteristic::all();
        $basicAbilities = BasicAbility::all();
        $advancedAbilities = AdvancedAbility::all();

        $select_ch = '<select class="char"><option value="0">Selecciona característica</option>';
        foreach ($characteristics as $ch) {
            $select_ch .= '<option value=' . $ch->id_characteristic . '>' . $ch->name . '</option>';
        }
        $select_ch .= '</select>';
        $select_ch = html_entity_decode($select_ch);

        $select_ba = '<select class="char"><option value="0">Selecciona habilidad básica</option>';
        foreach ($basicAbilities as $ba) {
            $select_ba .= '<option value=' . $ba->id_basic_ability . '>' . $ba->label . '</option>';
        }
        $select_ba .= '</select>';
        $select_ba = html_entity_decode($select_ba);

        $select_aa = '<select class="char"><option value="0">Selecciona habilidad avanzada</option>';
        foreach ($advancedAbilities as $aa) {
            $select_aa .= '<option value=' . $aa->id_advanced_ability . '>' . $aa->name . '</option>';
        }
        $select_aa .= '</select>';
        $select_aa = html_entity_decode($select_aa);

        return view('create')->with('talents', $talents)->with('select_ch', $select_ch)->with('select_ba', $select_ba)->with('select_aa', $select_aa);
    }
}