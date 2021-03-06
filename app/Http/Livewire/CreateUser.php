<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $role;
    public $propertyName;
    public $validatedData;


    // Set Validation Rules
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'role' => 'required',
    ];

    //Live updates for Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    // Create the User
    public function addUser()
    {
        $validatedData = $this->validate();

        User::create($validatedData);

        session()->flash('message', 'Staff User Successfully Created.');

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
