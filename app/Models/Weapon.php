<?php

namespace App\Models;

use App\Models\WeaponType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(WeaponType::class);
    }
}
