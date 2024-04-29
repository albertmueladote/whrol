<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    use HasFactory;
    protected $table = 'user_sheet';
    protected $primaryKey = 'id_user_sheet';
    protected $fillable = [
        'name',
        'id_race',
        'id_category',
        'id_career_path',
        'status',
        'age',
        'height',
        'id_hair',
        'id_eyes',
    ];
}
