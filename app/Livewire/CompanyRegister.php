<?php

namespace App\Livewire;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use Livewire\Component;

class CompanyRegister extends Component
{
    public $phone;
    public $password;
    public $password_confirmation;
    public function render()
    {
        return view('livewire.company-register');
    }

    public function register()
    {
        
        $this->validate([
            'phone' => 'required|unique:company',
            'password' => 'required|min:6|confirmed',
        ]);

        Company::create([
            'phone' => $this->phone,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Company registered successfully.');
    }
}
