<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    protected $table = 'talent';
    protected $primaryKey = 'id_talent';

    public function characteristics_talent()
    {
        return $this->belongsToMany(Characteristic::class, 'talent_max_characteristic', 'id_talent', 'id_characteristic');
    }

    public function basicAbilities()
    {
        return $this->belongsToMany(BasicAbility::class, 'talent_basic_ability_check', 'id_talent', 'id_basic_ability');
    }

    public function advancedAbilities()
    {
        return $this->belongsToMany(AdvancedAbility::class, 'talent_advanced_ability_check', 'id_talent', 'id_advanced_ability');
    }

    public function characteristics_check()
    {
        return $this->belongsToMany(Characteristic::class, 'talent_characteristic_check', 'id_talent', 'id_characteristic');
    }

    public function talentConditionCheck()
    {
        return $this->hasOne(TalentConditionCheck::class);
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'race_talent', 'id_talent', 'id_race');
    }

    public function chooseTalents()
    {
        return $this->belongsToMany(Race::class, 'race_choose_talent', 'id_talent', 'id_race');
    }

    public function careerPaths()
    {
        return $this->belongsToMany(CareerPath::class, 'career_path_talent', 'id_talent', 'id_career_path');
    }

    public function characteristicIncrement()
    {
        return $this->hasOne(TalentCharacteristic::class, 'id_talent');
    }

}