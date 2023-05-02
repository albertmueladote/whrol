<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicAbility extends Model
{
    use HasFactory;
    protected $table = 'basic_ability';
    protected $primaryKey = 'id_basic_ability';

    public function get($id_basic_ability)
    {
        return CareerPath::where('id_basic_ability', $id_basic_ability)->get();
    }

    public function getAll()
    {
        return BasicAbility::All();
    }
}
