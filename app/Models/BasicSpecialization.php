<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSpecialization extends Model
{
    use HasFactory;
    protected $table = 'basic_specialization';
    protected $primaryKey = 'id_basic_specialization';

    public function basicAbilities()
    {
        return $this->hasMany(BasicAbility::class, 'id_basic_specialization');
    }

    public function careerPath()
    {
        return $this->belongsToMany(CareerPath::class, 'career_path_basic_specialization', 'id_basic_specialization', 'id_career_path');
    }

    public function raceBasicAbilities()
    {
        return $this->belongsToMany(Race::class, 'race_basic_specialization', 'id_basic_specialization', 'id_race')
            ->withPivot('id_basic_ability');
    }
}