<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaceProfession extends Model
{
    use HasFactory;
    protected $table = 'race_profession';
    protected $primaryKey = 'id_race_profession';

    public function getRace($id_race)
    {
        return RaceProfession::where('id_race', $id_race)->get();
    }

    public function getProfession($id_profession)
    {
        return RaceProfession::where('id_profession', $id_profession)->get();
    }
}