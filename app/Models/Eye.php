<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eye extends Model
{
    use HasFactory;
    protected $table = 'eye';
    protected $primaryKey = 'id_eye';

    public function get($id_eye)
    {
        return Eye::where('id_eye', $id_eye)->first();  
    }

    public function getAll()
    {
        return Eye::All();
    }
}
