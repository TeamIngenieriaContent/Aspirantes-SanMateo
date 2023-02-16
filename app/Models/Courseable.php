<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courseable extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
    ];

    public function courseable(){
        return $this->morphTo();
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
