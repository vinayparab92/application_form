<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Register extends Component
{
    public $photo;
    

    public function render()
    {
        return view('livewire.register');
    }
    
	public function updated($field)
    {
       
        dd($this->photo);
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
}
