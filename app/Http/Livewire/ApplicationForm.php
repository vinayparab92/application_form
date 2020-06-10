<?php

namespace App\Http\Livewire;



use Livewire\Component;

class ApplicationForm extends Component
{
    public $name;
    public $email;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'min:6',
            'email' => 'email',
        ]);
    }

    public function saveContact()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
        ]);

        Contact::create($validatedData);
    }

    public function render()
    {
        return view('livewire.application-form');
    }
}
