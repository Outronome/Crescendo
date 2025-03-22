<?php

namespace App\Livewire\Layout;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dropdown extends Component
{
    public $aberto = false;
    public $user;
    public function render()
    {
        $this->user = Auth::user();
        return view('layout.componente.dropdown');
    }
    public function abrirfechar(){
        $this->aberto = !$this->aberto;
    }
    public  function logout(){
        Auth::logout();
        return redirect('/');
    }
}
