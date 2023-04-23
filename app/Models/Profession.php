<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    protected $table = 'profession';
    protected $primaryKey = 'id_profession';

    public function get($id_profession)
    {
        return Profession::where('id_profession', $id_profession)->first();  
    }

    public function getAll()
    {
        return Profession::All();
    }

    public function getClass($id_class)
    {
         return Profession::where('id_class', $id_class)->get(); 
    }
}
