<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Race;
use App\Models\Characteristic;
use App\Models\RaceCharacteristic;
use App\Models\_Class;
use App\Models\Profession;
use App\Models\Eye;
use App\Models\RaceEye;
use App\Models\Hair;
use App\Models\RaceHair;
use App\Models\Class;
use App\Models\CareerPath;
use App\Models\CareerPathCharacteristic;
use App\Models\CareerPathBasicAbility;
use App\Models\BasicAbility;
use App\Models\BasicSpecialization;
use App\Models\RaceProfession;

class NewController extends Controller
{
    public function new()
    {
        $race = new Race;
        $race = $race->getAll();
        $class = new _Class;
        $class = $class->getAll();
        $array_nuevo = [];
        return view('new')->with('race', $race)->with('class', $class);
    }

    public function race(Request $request)
    {
        $race = new Race();
        $characteristic = new Characteristic();
        $race_characteristic = new RaceCharacteristic();
        return array('race' => $race->get($request->id_race), 'characteristic' => $characteristic->getAll(), 'race_characteristic' => $race_characteristic->getRace($request->id_race));
    }

    public function class(Request $request)
    {
        $profession = new Profession();
        return $profession->getProfessionRaceProfession($request->id_race, $request->id_class);
    }

    public function profession(Request $request)
    {
        $profession = new Profession();
        $characteristic = new Characteristic();
        $career_path = new CareerPath();
        $career_path = $career_path->getProfession($request->id_profession);
        $career_path_characteristic = new CareerPathCharacteristic();
        $career_path_characteristic_array = array();
        foreach($career_path AS $cp)
        {
            $career_path_characteristic_aux = $career_path_characteristic->getCareerPath($cp->id_career_path);            
            foreach($career_path_characteristic_aux AS $cpc)
            {
                array_push($career_path_characteristic_array, $cpc);
            }
        }
        return array('profession' => $profession->get($request->id_profession), 'career_path' => $career_path, 'characteristic' => $characteristic->getAll(), 'career_path_characteristic' => $career_path_characteristic_array);
    }

    public function age(Request $request)
    {
        $race = new Race();
        $race = $race->get($request->id_race);
        return rand($race->age_min, $race->age_max);
    }

    public function height(Request $request)
    {
        $race = new Race();
        $race = $race->get($request->id_race);
        return rand($race->height_min, $race->height_max);
    }

    public function hair(Request $request) 
    {
        $race_hair = new RaceHair();
        $hair = new Hair();
        return $hair->get($race_hair->random($request->id_race)->id_hair);
    }

    public function eye(Request $request) 
    {
        $race_eye = new RaceEye();
        $eye = new Eye();
        return $eye->get($race_eye->random($request->id_race)->id_eye);
    }

    public function characteristic(Request $request)
    {
        $characteristic = [
                'ha' => rand(1,20),
                'hp' => rand(1,20),
                'f' => rand(1,20),
                'r' => rand(1,20),
                'ini' => rand(1,20),
                'ag' => rand(1,20),
                'des' => rand(1,20),
                'i' => rand(1,20),
                'v' => rand(1,20),
                'em' => rand(1,20)
            ];
        return $characteristic;
    }

    public function test()
    {
        $p = new Profession();
        $p = $p->getAll();
        $r = new Race();
        $r = $r->getAll();
        return view('test')->with('profession', $p)->with('race', $r);
    }
}
