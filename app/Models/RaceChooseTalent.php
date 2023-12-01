<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceChooseTalent extends Model
{
    use HasFactory;

    public function talent()
    {
        return $this->belongsTo(Talent::class, 'id_talent');
    }

    public function race()
    {
        return $this->belongsTo(Race::class, 'id_race');
    }
}
