<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    use HasFactory;

    public function Keyboard_Cate(){
        return $this->hasOne(Category::class);
    }

    public function Keyboard_History(){
        return $this->hasMany(History::class);
    }
}
