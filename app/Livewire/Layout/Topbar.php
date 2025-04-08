<?php

namespace App\Livewire\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Topbar extends Component
{
    public function logout(){
            Auth::logout();
            return redirect()->route('inicio');
    }

    public function render()
    {
        return view('layout.componente.topbar');
    }
}
