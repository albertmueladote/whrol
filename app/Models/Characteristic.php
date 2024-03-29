<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;
    protected $table = 'characteristic';
    protected $primaryKey = 'id_characteristic';

    public function careerPaths()
    {
        return $this->belongsToMany(CareerPath::class, 'career_path_characteristic', 'id_characteristic', 'id_career_path');
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'race_characteristic', 'id_characteristic', 'id_race')->withPivot('value');
    }

    public function advancedAbilities()
    {
        return $this->belongsToMany(AdvancedAbility::class);
    }

    public function talents_characteristics()
    {
        return $this->belongsToMany(Talent::class, 'talent_max_characteristic', 'characteristic_id', 'talent_id');
    }

    public function talents_check()
    {
        return $this->belongsToMany(Talent::class, 'talent_characteristic_check', 'characteristic_id', 'talent_id');
    }
}