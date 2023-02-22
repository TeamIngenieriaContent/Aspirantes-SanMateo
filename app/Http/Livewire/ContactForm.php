<?php

namespace App\Http\Livewire;

use App\Models\Contact_option;
use Livewire\Component;

class ContactForm extends Component
{
    public function render()
    {
        $contacts = Contact_option::pluck('name','id');
        return view('livewire.contact-form', compact('contacts'));
    }
}
