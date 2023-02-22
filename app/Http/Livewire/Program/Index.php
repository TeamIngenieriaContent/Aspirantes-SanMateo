<?php

namespace App\Http\Livewire\Program;

use App\Models\Academic_program;
use Livewire\Component;


class Index extends Component
{
    public function render()
    {
        $programs = Academic_program::where('status',1)->latest('id')->get();
        return view('livewire.program.index', compact('programs'));
    }
}
