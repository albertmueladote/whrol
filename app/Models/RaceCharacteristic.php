<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceCharacteristic extends Model
{
    use HasFactory;
    protected $table = 'race_characteristic';
    protected $primaryKey = 'id_race_characteristic';

    public function getRace($id_race)
    {
        return RaceCharacteristic::where('id_race', $id_race)->get();
    }

    public function getCharacteristic($id_characteristic)
    {
        return RaceCharacteristic::where('id_characteristic', $id_characteristic)->get();
    }
}
