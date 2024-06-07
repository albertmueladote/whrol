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
        'id_user',
        'name',
        'id_race',
        'id_category',
        'id_career_path',
        'status',
        'age',
        'height',
        'id_hair',
        'id_eyes',
        'ha_ini',
        'hp_ini',
        'f_ini',
        'r_ini',
        'ini_ini',
        'ag_ini',
        'des_ini',
        'i_ini',
        'v_ini',
        'em_ini',
        'ha_imp',
        'hp_imp',
        'f_imp',
        'r_imp',
        'ini_imp',
        'ag_imp',
        'des_imp',
        'i_imp',
        'v_imp',
        'em_imp',
        "destiny",
        "fortune",
        "resilience",
        "resolution",
        "motivation",
        "exp_actual",
        "exp_spent",
        "exp_total",
        "movement",
        "walk",
        "run",
    ];
}
