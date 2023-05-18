<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicAbility extends Model
{
    use HasFactory;
    protected $table = 'basic_ability';
    protected $primaryKey = 'id_basic_ability';

    public function careerPaths()
    {
        return $this->belongsToMany(CareerPath::class, 'career_path_basic_ability', 'id_basic_ability', 'id_career_path');
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'race_basic_ability', 'id_basic_ability', 'id_race')->withPivot('id_basic_specialization');
    }

    public function basicSpecialization()
    {
        return $this->belongsTo(BasicSpecialization::class, 'id_basic_specialization');
    }
}