<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSheet extends Model
{
    use HasFactory;
    protected $table = 'user_sheet';
    protected $primaryKey = 'id_user_sheet';

    public function race()
    {
        return $this->belongsTo(Race::class, 'id_race');
    }

    public function careerPath()
    {
        return $this->belongsTo(CareerPath::class, 'id_career_path');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function eyes()
    {
        return $this->belongsTo(Eye::class, 'id_eyes');
    }

    public function hair()
    {
        return $this->belongsTo(Hair::class, 'id_hair');
    }
}
