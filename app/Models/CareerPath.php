<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerPath extends Model
{
    use HasFactory;
    protected $table = 'career_path';
    protected $primaryKey = 'id_career_path';

    public function get($id_career_path)
    {
        return CareerPath::where('id_career_path', $id_career_path)->get();
    }

    public function getAll()
    {
        return CareerPath::All();
    }

    public function getProfession($id_profession)
    {
        return CareerPath::where('id_profession', $id_profession)->get();
    }
}
