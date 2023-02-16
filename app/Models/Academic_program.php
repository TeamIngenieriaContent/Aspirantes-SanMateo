<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_program extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function interaction(){
        return $this->hasMany('App\Models\Interaction');
    }

    // relación uno a uno polimorfica
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

    // Relación uno a muchos polimorfica
    public function courseable(){
        return $this->morphMany('App\Models\Courseable','courseable');
    }
}
