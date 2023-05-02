<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSpecialization extends Model
{
    use HasFactory;
    protected $table = 'basic_specialization';
    protected $primaryKey = 'id_basic_specialization';

    public function get($id_basic_specialization)
    {
        return BasicSpecialization::where('id_basic_specialization', $id_basic_specialization)->get();
    }

    public function getAll()
    {
        return BasicSpecialization::All();
    }
}
