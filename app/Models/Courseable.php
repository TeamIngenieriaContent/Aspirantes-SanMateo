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

    public function program_academic(){
        return $this->morphedByMany('App\Models\Academic_program','courseable');
    }
    public function semester(){
        return $this->morphedByMany('App\Models\Semester','courseable');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

}
