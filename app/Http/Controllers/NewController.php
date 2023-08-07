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

class NewController extends Controller
{
    public function new()
    {
        return view('new')->with('race', Race::All())->with('category', Category::All());
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
    public function status(Request $request)
    {
        $id_profession = $request->input('id_profession');
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
    public function characteristics(Request $request)
    {
        $race = Race::find($request->input('id_race'));
        $characteristics = $race->characteristics;
        return $characteristics;
    }
}