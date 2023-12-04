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
use App\Models\RandomTalent;
use App\Models\RaceRandomTalent;
use App\Models\RaceChooseTalent;

class NewController extends Controller
{
    public function new()
    {
        return view('new');
    }

    /**
     * 
     */
    public function race(Request $request)
    {
        $race = Race::find($request->input('id_race'));
        $race->car = $this->characteristics($request);
        return $race;
    }

    /**
     * 
     */
    public function races(Request $request)
    {
        $races = Race::all();
        return array('races' => $races);
    }

    /**
     * 
     */
    public function categories(Request $request)
    {
        $categories = Category::all();
        return array('categories' => $categories);
    }

    /**
     * 
     */
    public function professions(Request $request)
    {
        $id_race = $request->input('id_race');
        $id_category = $request->input('id_category');
        return array(
            'professions' => Profession::whereHas('races', function ($query) use ($id_race) {
                $query->where('race.id_race', $id_race);
            })->where('profession.id_category', $id_category)->get()
        );
    }

    /**
     * 
     */
    public function age(Request $request)
    {
        $race = Race::find($request->input('id_race'));
        return rand($race->age_min, $race->age_max);
    }

    /**
     * 
     */
    public function height(Request $request)
    {
        $race = Race::find($request->input('id_race'));
        return rand($race->height_min, $race->height_max);
    }

    /**
     * 
     */
    public function hair(Request $request)
    {
        $id_race = $request->input('id_race');
        $hairs = Hair::whereHas('races', function ($query) use ($id_race) {
            $query->where('race.id_race', $id_race);
        })->get();
        return $hairs[rand(0, sizeof($hairs) - 1)];
    }

    /**
     * 
     */
    public function eyes(Request $request)
    {
        $id_race = $request->input('id_race');
        $eyes = Eye::whereHas('races', function ($query) use ($id_race) {
            $query->where('race.id_race', $id_race);
        })->get();
        return $eyes[rand(0, sizeof($eyes) - 1)];
    }

    /**
     * 
     */
    public function profession(Request $request)
    {
        $result['status'] = $this->status($request);
        $result['characteristics'] = $this->career_path_characteristics($request);
        return $result;
    }

    /**
     * 
     */
    public function choose_eyes(Request $request)
    {
        $id_race = $request->input('id_race');
        $eyes = Eye::whereHas('races', function ($query) use ($id_race) {
            $query->where('race.id_race', $id_race);
        })->whereNot('id_eye', 1)->get();
        return $eyes;
    }

    /**
     * 
     */
    public function choose_hairs(Request $request)
    {
        $id_race = $request->input('id_race');
        $hairs = Hair::whereHas('races', function ($query) use ($id_race) {
            $query->where('race.id_race', $id_race);
        })->get();
        return $hairs;
    }

    /**
     * 
     */
    public function choose_heights(Request $request)
    {
        $race = Race::find($request->input('id_race'));
        $min = $race->height_min;
        $max = $race->height_max;
        $heights = array();
        for ($x = $min; $x <= $max; $x++) {
            $heights[] = $x;
        }
        return $heights;
    }

    /**
     * 
     */
    public function choose_ages(Request $request)
    {
        $race = Race::find($request->input('id_race'));
        $min = $race->age_min;
        $max = $race->age_max;
        $ages = array();
        for ($x = $min; $x <= $max; $x++) {
            $ages[] = $x;
        }
        return $ages;
    }

    /**
     * 
     */
    public function characteristics(Request $request)
    {
        $race = Race::find($request->input('id_race'));
        $characteristics = $race->characteristics;
        return $characteristics;
    }

    /**
     * 
     */
    public function status(Request $request)
    {
        $id_profession = $request->input('id_profession');
        if ($id_profession == 0) {
            return false;
        }
        $career_path_level = $request->input('career_path_level');
        if (is_null($career_path_level)) {
            $career_path_level = 1;
        }
        $career_path = CareerPath::whereHas('professions', function ($query) use ($id_profession) {
            $query->where('profession.id_profession', $id_profession);
        })->get();
        return $career_path[$career_path_level - 1]['status_range'] . ' ' . $career_path[$career_path_level - 1]['status_level'];
    }

    /**
     * 
     */
    public function career_path_characteristics(Request $request)
    {
        $id_profession = $request->input('id_profession');
        $careerPaths = CareerPath::where('id_profession', $id_profession)
            ->with('characteristics')
            ->get();
        return $careerPaths;
    }

    /**
     * 
     */
    public function random_characteristics()
    {
        $characteristics = Characteristic::all();
        foreach ($characteristics as $characteristic) {
            $characteristic->value = rand(1, 20);
        }
        return $characteristics;
    }

    /**
     * 
     */
    public function throw_dice()
    {
        $characteristics = Characteristic::all();
        foreach ($characteristics as $characteristic) {
            $characteristic->value = rand(1, 20);
        }
        return $characteristics;
    }

    /**
     * 
     */
    public function race_basic_abilities(request $request)
    {
        $result = array();
        $id_race = $request->input('id_race');
        $basic_abilities = BasicAbility::whereHas('races', function ($query) use ($id_race) {
            $query->where('race.id_race', $id_race);
        })->get();
        $ids_basic_abilities = $basic_abilities->pluck('id_basic_ability')->toArray();
        $race_basic_specializations = BasicSpecialization::whereHas('raceBasicAbilities', function ($query) use ($id_race, $ids_basic_abilities) {
            $query->where('race_basic_specialization.id_race', $id_race)
                ->whereIn('race_basic_specialization.id_basic_ability', $ids_basic_abilities);
        })
            ->get();
        foreach ($race_basic_specializations as $rbs) {
            foreach ($basic_abilities as $ba) {
                if ($rbs->id_basic_ability == $ba->id_basic_ability) {
                    if (!isset($result['basic_specializations'][$ba->name])) {
                        $result['basic_specializations'][$ba->name] = array();
                    }
                    array_push($result['basic_specializations'][$ba->name], $rbs);
                }
            }
        }
        $result['basic_abilities'] = $basic_abilities;
        return $result;
    }

    /**
     * 
     */
    public function race_advanced_abilities(request $request)
    {
        $result = array();
        $id_race = $request->input('id_race');
        $advanced_abilities = AdvancedAbility::whereHas('races', function ($query) use ($id_race) {
            $query->where('race.id_race', $id_race);
        })->with('characteristic')->get();
        $ids_advanced_abilities = $advanced_abilities->pluck('id_advanced_ability')->toArray();
        $race_advanced_specializations = AdvancedSpecialization::whereHas('raceAdvancedAbilities', function ($query) use ($id_race, $ids_advanced_abilities) {
            $query->where('race_advanced_specialization.id_race', $id_race)
                ->whereIn('race_advanced_specialization.id_advanced_ability', $ids_advanced_abilities);
        })
            ->get();
        foreach ($race_advanced_specializations as $ras) {
            foreach ($advanced_abilities as $aa) {
                if ($ras->id_advanced_ability == $aa->id_advanced_ability) {
                    if (!isset($result['advanced_specializations'][$aa->name])) {
                        $result['advanced_specializations'][$aa->name] = array();
                    }
                    array_push($result['advanced_specializations'][$aa->name], $ras);
                }
            }
        }
        $result['advanced_abilities'] = $advanced_abilities;
        return $result;
    }

    /**
     * 
     */
    public function career_path_basic_abilities(request $request)
    {
        $result = array();
        $id_profession = $request->input('id_profession');
        if ($id_profession == 0) {
            return false;
        }
        $career_path = CareerPath::where('id_profession', $id_profession)->where('level', 1)->first();
        $id_career_path = $career_path->id_career_path;
        $basic_abilities = BasicAbility::whereHas('careerPaths', function ($query) use ($id_career_path) {
            $query->where('career_path.id_career_path', $id_career_path);
        })->get();
        $career_path_basic_specializations = BasicSpecialization::whereHas('careerPath', function ($query) use ($id_career_path) {
            $query->where('career_path.id_career_path', $id_career_path);
        })->get();
        foreach ($career_path_basic_specializations as $cpbs) {
            foreach ($basic_abilities as $index => $ba) {
                if ($cpbs->id_basic_ability == $ba->id_basic_ability) {
                    if (!isset($result['basic_specializations'][$ba->name])) {
                        $result['basic_specializations'][$ba->name] = array();
                    }
                    array_push($result['basic_specializations'][$ba->name], $cpbs);
                }
            }
        }
        $result['basic_abilities'] = $basic_abilities;
        return $result;
    }

    /**
     * 
     */
    public function career_path_advanced_abilities(request $request)
    {
        $result = array();
        $id_profession = $request->input('id_profession');
        if ($id_profession == 0) {
            return false;
        }
        $career_path = CareerPath::where('id_profession', $id_profession)->where('level', 1)->first();
        $id_career_path = $career_path->id_career_path;
        $advanced_abilities = AdvancedAbility::whereHas('careerPaths', function ($query) use ($id_career_path) {
            $query->where('career_path.id_career_path', $id_career_path);
        })->with('characteristic')->get();
        $ids_advanced_abilities = $advanced_abilities->pluck('id_advanced_ability')->toArray();
        $career_path_advanced_specializations = AdvancedSpecialization::whereHas('careerPathAdvancedAbilities', function ($query) use ($id_career_path, $ids_advanced_abilities) {
            $query->where('career_path_advanced_specialization.id_career_path', $id_career_path)
                ->whereIn('career_path_advanced_specialization.id_advanced_ability', $ids_advanced_abilities);
        })->get();
        foreach ($career_path_advanced_specializations as $cpas) {
            foreach ($advanced_abilities as $aa) {
                if ($cpas->id_advanced_ability == $aa->id_advanced_ability) {
                    if (!isset($result['advanced_specializations'][$aa->name])) {
                        $result['advanced_specializations'][$aa->name] = array();
                    }
                    array_push($result['advanced_specializations'][$aa->name], $cpas);
                }
            }
        }
        $result['advanced_abilities'] = $advanced_abilities;

        return $result;
    }

    public function race_talents(request $request)
    {
        $result = array();
        $id_race = $request->input('id_race');

        $race_talents = Talent::whereHas('races', function ($query) use ($id_race) {
            $query->where('race_talent.id_race', $id_race);
        })->get();

        $race_choose_talents = RaceChooseTalent::with('talent')
            ->where('id_race', $id_race)
            ->get();

        $result['random'] = Race::find($id_race)->randomTalent;
        if (!is_null($result['random'])) {
            $result['random'] = $result['random']['random_talents'];
        }
        foreach ($race_talents as $rt) {
            $result['talents'][$rt->name] = $rt;
        }
        foreach ($race_choose_talents as $rct) {
            $result['choose'][$rct->group][$rct->id_talent] = $rct->talent;
        }
        return $result;
    }

    public function random_talents(request $request)
    {
        $random_talents_n = $request->input('random_talents_n');
        $random_talents = RandomTalent::with('talent')->inRandomOrder()->limit($random_talents_n)->get();
        foreach ($random_talents as $rt) {
            $result[$rt->talent->name] = $rt->talent;
        }
        return $result;
    }

    public function career_path_talents(request $request)
    {
        $result = array();
        $id_profession = $request->input('id_profession');
        if ($id_profession == 0) {
            return false;
        }
        $career_path = CareerPath::where('id_profession', $id_profession)->where('level', 1)->first();
        $id_career_path = $career_path->id_career_path;
        $career_path_talents = Talent::whereHas('careerPaths', function ($query) use ($id_career_path) {
            $query->where('career_path_talent.id_career_path', $id_career_path);
        })->get();

        foreach ($career_path_talents as $cpt) {
            $result['talents'][$cpt->name] = $cpt;
        }

        return $result;
    }

    public function background_image_upload(request $request)
    {
        /*$images = Gallery::all()->toArray();
        foreach ($images as $image) {
            $tableImages[] = $image['filename'];
        }
        $storeFolder = public_path('uploads/gallery');
        $file_path = public_path('uploads/gallery/');
        $files = scandir($storeFolder);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..' && in_array($file, $tableImages)) {
                $obj['name'] = $file;
                $file_path = public_path('uploads/gallery/') . $file;
                $obj['size'] = filesize($file_path);
                $obj['path'] = url('public/uploads/gallery/' . $file);
                $data[] = $obj;
            }

        }
        //dd($data);
        return response()->json($data);*/
    }
}

