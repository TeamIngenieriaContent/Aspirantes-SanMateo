<?php

namespace App\Http\Controllers;

use App\Models\Academic_program;
use App\Models\Course;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(){
        $programs = Academic_program::where('status',1)->latest('id')->get();
        return view('program.index', compact('programs'));
    }

    public function show(Academic_program $program){

        $courses = Course::where('academic_program_id', $program->id)
            ->latest('id','asc')
            ->get();
        return view('program.show', compact('program','courses'));
    }
}
