<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eye extends Model
{
    use HasFactory;
    protected $table = 'eye';
    protected $primaryKey = 'id_eye';

    public function races()
    {
        return $this->belongsToMany(Race::class, 'race_eye', 'id_eye', 'id_race');
    }
}
