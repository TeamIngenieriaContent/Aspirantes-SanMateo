<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = [];
    // Relación uno a muchos
    public function courseable(){
        return $this->hasMany('App\Models\Courseable');
    }

    // relación uno a uno poliorfica
    public function image(){
        return $this->morphOne('App\Models\Image','imageable');
    }

}
