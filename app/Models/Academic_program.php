<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_program extends Model
{
    use HasFactory;

    public function interaction(){
        return $this->hasMany('App\Models\Interaction');
    }
}
