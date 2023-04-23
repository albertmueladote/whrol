<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hair extends Model
{
    use HasFactory;
    protected $table = 'hair';
    protected $primaryKey = 'id_hair';

    public function get($id_hair)
    {
        return Hair::where('id_hair', $id_hair)->first();  
    }

    public function getAll()
    {
        return Hair::All();
    }
}
