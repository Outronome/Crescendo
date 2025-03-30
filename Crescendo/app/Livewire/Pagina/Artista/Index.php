<?php

namespace App\Livewire\Pagina\Artista;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $criar = false;
    public function abrirCriarMusica()
    {
        $this->criar = true;
    }
    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.artista.index');
    }
}
