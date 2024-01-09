<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CompanyLogin extends Component
{

    public $phone;
    public $password;
    public function render()
    {
        return view('livewire.company-login');
    }

    public function login()
    {
        $credentials = [
            'phone' => $this->phone_number,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->to('/jd/comprof'); 
        } else {
            session()->flash('error', 'Invalid credentials');
        }
    }
}
