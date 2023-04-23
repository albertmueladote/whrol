<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceHair extends Model
{
    use HasFactory;
    protected $table = 'race_hair';
    protected $primaryKey = 'id_race_hair';

    public function getRace($id_race)
    {
        return RaceEye::where('id_race', $id_race)->get();
    }

    public function getHair($id_hair)
    {
        return RaceHair::where('id_hair', $id_hair)->get();
    }

    public function random($id_race)
    {
        return RaceHair::where('id_race', $id_race)->inRandomOrder()->first();
    }
}
