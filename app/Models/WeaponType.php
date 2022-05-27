<?php

namespace App\Models;

use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeaponType extends Model
{
    use HasFactory;

    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }
}
