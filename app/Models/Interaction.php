<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function interaction_type(){
        return $this->belongsTo('App\Models\Interaction_type');
    }

    public function academic_program(){
        return $this->belongsTo('App\Models\Academic_program');
    }
}
