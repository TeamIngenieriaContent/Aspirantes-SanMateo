<?php

namespace App\Http\Livewire\Program;

use App\Models\Course;
use Livewire\Component;


class Show extends Component
{
    public $program;

    public function render()
    {
        $courses = Course::where('academic_program_id', $this->program->id)->get();

        /* Course::with(['academic_programs' => function($query) {
            $query->where('academic_program_id', $this->program->id);
        }])->whereRelation('program','academic_program_id', $this->program->id); */
        return view('livewire.program.show', compact('courses'));
    }
}
