<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $primaryKey = 'id_category';

    public function professions()
    {
        return $this->hasMany(Profession::class, 'id_category', 'id_category');
    }
}