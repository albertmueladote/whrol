<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSpecialization extends Model
{
    use HasFactory;
    protected $table = 'basic_specialization';
    protected $primaryKey = 'id_basic_specialization';

    public function basicHabilities()
    {
        return $this->hasMany(BasicHability::class, 'id_basic_specialization');
    }
}
