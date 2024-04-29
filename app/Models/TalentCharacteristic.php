<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentCharacteristic extends Model
{
    use HasFactory;
    protected $table = 'talent_characteristic';
    protected $primaryKey = 'id_talent_characteristic';
    public function talent()
    {
        return $this->belongsTo(Talent::class, 'id_talent');
    }
    public function characteristic()
    {
        return $this->belongsTo(Characteristic::class, 'id_characteristic');
    }
}
