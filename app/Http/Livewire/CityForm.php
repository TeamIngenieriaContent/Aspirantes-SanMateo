<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;

class CityForm extends Component
{
    public function render()
    {
        $cities = City::pluck('name','id');
        return view('livewire.city-form', compact('cities'));
    }
}
