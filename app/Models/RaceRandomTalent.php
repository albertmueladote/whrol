<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceRandomTalent extends Model
{
    use HasFactory;
    protected $table = 'race_random_talent';
    protected $primaryKey = 'id_race_random_talent';

    public function race()
    {
        return $this->belongsTo(Race::class, 'id_race');
    }
}
