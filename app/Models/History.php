<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public function User_History(){
        return $this->hasOne(User::class);
    }

    public function Keyboard_History(){
        return $this->hasMany(Keyboard::class);
    }

    public function History_Det(){
        return $this->hasOne(HistoryDetail::class);
    }
}
