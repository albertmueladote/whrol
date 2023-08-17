<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvancedAbility extends Model
{
    use HasFactory;
    protected $table = 'advanced_ability';
    protected $primaryKey = 'id_advanced_ability';
    public function careerPaths()
    {
        return $this->belongsToMany(CareerPath::class, 'career_path_advanced_ability', 'id_advanced_ability', 'id_career_path');
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'race_advanced_ability', 'id_advanced_ability', 'id_race')->withPivot('id_advanced_specialization');
    }

    public function advancedSpecialization()
    {
        return $this->belongsTo(AdvancedSpecialization::class, 'id_advanced_specialization');
    }

    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class, 'id_characteristic');
    }
}