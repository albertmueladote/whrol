<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hair extends Model
{
    use HasFactory;
    protected $table = 'hair';
    protected $primaryKey = 'id_hair';

    public function races()
    {
        return $this->belongsToMany(Race::class, 'race_hair', 'id_hair', 'id_race');
    }
}
