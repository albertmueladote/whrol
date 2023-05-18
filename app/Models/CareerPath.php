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
}