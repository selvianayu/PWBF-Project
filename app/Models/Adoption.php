<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;

    public function Hewan()
    {
        return $this->hasMany(Hewan::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
