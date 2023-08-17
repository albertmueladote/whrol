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
        $career_path = CareerPath::all();
        $advanced_abilities = AdvancedAbility::all();
        return view('create')->with('career_path', $career_path)->with('advanced_abilities', $advanced_abilities);
    }
}