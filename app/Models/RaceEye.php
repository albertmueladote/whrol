<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceEye extends Model
{
    use HasFactory;
    protected $table = 'race_eye';
    protected $primaryKey = 'id_race_eye';

    public function getRace($id_race)
    {
        return RaceEye::where('id_race', $id_race)->get();
    }

    public function getEye($id_eye)
    {
        return RaceEye::where('id_eye', $id_eye)->get();
    }

    public function random($id_race)
    {
        return RaceEye::where('id_race', $id_race)->inRandomOrder()->first();
    }
}
