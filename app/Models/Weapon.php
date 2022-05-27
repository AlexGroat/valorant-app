<?php

namespace App\Models;

use App\Models\WeaponType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;

    protected $fillable = [
        'weapon_type'
    ];

    public function type()
    {
        return $this->belongsTo(WeaponType::class);
    }
}
