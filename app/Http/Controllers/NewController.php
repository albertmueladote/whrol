<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Characteristic;
use App\Models\Profession;
use App\Models\Race;
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