<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _Class extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $primaryKey = 'id_class';

    public function get($id_class = null)
    {
        return _Class::find($id_class)->firstOrFail();
    }

    public function getAll()
    {
        return _Class::All();
    }
}
