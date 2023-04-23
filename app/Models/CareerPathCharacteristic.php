<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerPathCharacteristic extends Model
{
    use HasFactory;
    protected $table = 'career_path_characteristic';
    protected $primaryKey = 'id_career_path_characteristic';

    public function get($id_career_path_characteristic)
    {
        return CareerPathCharacteristic::where('id_career_path_characteristic', $id_career_path_characteristic)->get();
    }

    public function getAll()
    {
        return CareerPathCharacteristic::All();
    }

    public function getCareerPath($id_career_path)
    {
        return CareerPathCharacteristic::where('id_career_path', $id_career_path)->get();
    }
}
