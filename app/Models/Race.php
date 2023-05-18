<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $table = 'race';
    protected $primaryKey = 'id_race';

    public function professions()
    {
        return $this->belongsToMany(Profession::class, 'race_profession', 'id_race', 'id_profession');
    }

    public function hairs()
    {
        return $this->belongsToMany(Hair::class, 'race_hair', 'id_race', 'id_hair');
    }

    public function eyes()
    {
        return $this->belongsToMany(Eye::class, 'race_eye', 'id_race', 'id_eye');
    }

    public function basicAbilities()
    {
        return $this->belongsToMany(Eye::class, 'race_basic_ability', 'id_race', 'id_basic_ability');
    }

    public function basicHabilities()
    {
        return $this->belongsToMany(BasicHability::class, 'race_basic_hability', 'id_race', 'id_basic_hability')->withPivot('id_basic_specialization');
    }

    public function characteristics()
    {
        return $this->belongsToMany(Characteristic::class, 'race_characteristic', 'id_race', 'id_characteristic')->withPivot('value');
    }
}