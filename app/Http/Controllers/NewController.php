<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Profession;
use App\Models\Race;

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
    public function race(Request $request)
    {
        $race = Race::find($request->id_race);
        return array('race' => $race, 'race_characteristic' => $race->characteristics);
    }

    /**
     * 
     */
    public function category(Request $request)
    {
        $category = Category::where('id_category', $request->id_category)->firstOrFail();
        $id_race = $request->id_race;
        return $category->professions()->whereHas('races', function ($query) use ($id_race) {
            $query->where('race.id_race', $id_race);
        })->get();
    }

    public function profession(Request $request)
    {
        $profession = Profession::with('careerPaths.characteristics')->find($request->id_profession);
        return array('profession' => $profession, 'career_path' => $profession->careerPaths, 'characteristic' => null);
    }

    /**
     * 
     */
    public function age(Request $request)
    {
        $race = Race::find($request->id_race);
        return rand($race->age_min, $race->age_max);
    }

    /**
     * 
     */
    public function height(Request $request)
    {
        $race = Race::find($request->id_race);
        return rand($race->height_min, $race->height_max);
    }

    /**
     * 
     */
    public function hair(Request $request)
    {
        $race = Race::find($request->id_race);
        return $race->hairs[rand(0, sizeof($race->hairs) - 1)];
    }

    /**
     * 
     */
    public function eye(Request $request)
    {
        $race = Race::find($request->id_race);
        return $race->eyes[rand(0, sizeof($race->eyes) - 1)];
    }

    /**
     * 
     */
    public function characteristic(Request $request)
    {
        $characteristics = Characteristic::All();
        $characteristic = [];
        foreach ($characteristics as $ch) {
            $characteristic[strtolower($ch->abbreviation)] = rand(1, 20);
        }
        return $characteristic;
    }
}