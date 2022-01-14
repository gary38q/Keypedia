<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;

    public function MyCart(){
        return $this->hasOne(User::class);
    }
    public function MyCartKey(){
        return $this->hasMany(Keyboard::class);
    }
}
