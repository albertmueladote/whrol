<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $table = 'profession';
    protected $primaryKey = 'id_profession';

    public function categories() 
    {
        return $this->belongsTo(Category::class, 'id_profession', 'id_category');
    }

    public function careerPaths() 
    {
        return $this->hasMany(CareerPath::class, 'id_profession', 'id_profession');
    }

    public function races()
    {
        return $this->belongsToMany(Race::class, 'race_profession', 'id_profession', 'id_race');
    }
}
