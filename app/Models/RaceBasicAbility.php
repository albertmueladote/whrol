<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceBasicAbility extends Model
{
    use HasFactory;
    protected $table = 'race_basic_ability';
    protected $primaryKey = 'id_basic_ability';

    public function getRace($id_race)
    {
        return RaceBasicAbility::where('id_race', $id_race)->get();
    }

    public function getBasicAbility($id_basic_ability)
    {
        return RaceBasicAbility::where('id_basic_ability', $id_basic_ability)->get();
    }
}
