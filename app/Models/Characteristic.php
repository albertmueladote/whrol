<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;
    protected $table = 'characteristic';
    protected $primaryKey = 'id_characteristic';

    public function get($id_characteristic)
    {
        return Characteristic::where('id_characteristic', $id_characteristic)->get();
    }

    public function getAll()
    {
        return Characteristic::All();
    }
}
