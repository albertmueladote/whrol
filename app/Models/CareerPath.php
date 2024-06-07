<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerPath extends Model
{
    use HasFactory;
    protected $table = 'career_path';
    protected $primaryKey = 'id_career_path';

    public function getProfession($id_profession)
    {
        return CareerPath::where('id_profession', $id_profession)->get();
    }

    public function professions()
    {
        return $this->belongsTo(Profession::class, 'id_profession', 'id_profession');
    }

    public function basicAbilities()
    {
        return $this->belongsToMany(BasicAbility::class, 'career_path_basic_ability', 'id_career_path', 'id_basic_ability');
    }

    public function characteristics()
    {
        return $this->belongsToMany(Characteristic::class, 'career_path_characteristic', 'id_career_path', 'id_characteristic');
    }

    public function basicSpecialization()
    {
        return $this->belongsToMany(BasicSpecialization::class, 'career_path_basic_specialization', 'id_career_path', 'id_basic_specialization');
    }

    public function advancedAbilities()
    {
        return $this->belongsToMany(AdvancedAbility::class, 'career_path_advanced_ability', 'id_career_path', 'id_advanced_ability');
    }

    public function advancedSpecialization()
    {
        return $this->belongsToMany(AdvancedSpecialization::class, 'career_path_advanced_specialization', 'id_career_path', 'id_advanced_specialization');
    }

    public function talents()
    {
        return $this->belongsToMany(Talent::class, 'career_path_talent', 'id_career_path', 'id_talent');
    }

    public function userSheets()
    {
        return $this->hasMany(UserSheet::class, 'id_race');
    }
}