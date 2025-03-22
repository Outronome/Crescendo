<?php

namespace App\Livewire\Pagina\Artista;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.artista.index');
    }
}
