<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RandomTalent extends Model
{
    use HasFactory;
    protected $table = 'random_talent';
    protected $primaryKey = 'id_random_talent';

    public function talent()
    {
        return $this->belongsTo(Talent::class, 'id_talent');
    }
}
