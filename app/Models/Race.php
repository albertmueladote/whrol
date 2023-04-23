<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;
    protected $table = 'race';
    protected $primaryKey = 'id_race';

    public function get($id_race)
    {
        return Race::where('id_race', $id_race)->first();  
    }

    public function getAll()
    {
        return Race::All();
    }
}
