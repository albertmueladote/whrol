<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerPathBasicAbility extends Model
{
    use HasFactory;
    protected $table = 'career_path_basic_ability';
    protected $primaryKey = 'id_career_path_basic_ability';

    public function get($id_career_path_basic_ability)
    {
        return CareerPathCharacteristic::where('id_career_path_basic_ability', $id_career_path_basic_ability)->get();
    }

    public function getAll()
    {
        return CareerPathBasicAbility::All();
    }

    public function getCareerPath($id_career_path)
    {
        return CareerPathBasicAbility::where('id_career_path', $id_career_path)->get();
    }

    public function getBasicAbility($id_basic_ability)
    {
        return CareerPathBasicAbility::where('id_basic_ability', $id_basic_ability)->get();
    }
}
