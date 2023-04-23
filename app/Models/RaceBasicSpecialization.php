<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceBasicSpecialization extends Model
{
    use HasFactory;
    protected $table = 'race_basic_specialization';
    protected $primaryKey = 'id_race_basic_specialization';

    public function getRace($id_race)
    {
        return RaceBasicSpecialization::where('id_race', $id_race)->get();
    }

    public function getBasicSpecialization($id_basic_specialization)
    {
        return RaceBasicSpecialization::where('id_basic_specialization', $id_basic_specialization)->get();
    }
}
