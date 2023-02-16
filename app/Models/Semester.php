<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $guarded = [];

    // Relación uno a muchos polimorfica
    public function courseable(){
        return $this->morphMany('App\Models\Courseable','courseable');
    }

}
