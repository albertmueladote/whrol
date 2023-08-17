<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedSpecialization extends Model
{
    use HasFactory;
    protected $table = 'advanced_specialization';
    protected $primaryKey = 'id_advanced_specialization';

    public function advancedAbilities()
    {
        return $this->hasMany(AdvancedAbility::class, 'id_advanced_specialization');
    }

    public function careerPath()
    {
        return $this->belongsToMany(CareerPath::class, 'career_path_advanced_specialization', 'id_advanced_specialization', 'id_career_path');
    }

    public function raceAdvancedAbilities()
    {
        return $this->belongsToMany(Race::class, 'race_advanced_specialization', 'id_advanced_specialization', 'id_race')
            ->withPivot('id_advanced_ability');
    }
}