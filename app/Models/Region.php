<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    public function country(){
        return $this->belongsTo('App\Models\Country');
    }

    public function city(){
        return $this->hasMany('App\Models\City');
    }
}
