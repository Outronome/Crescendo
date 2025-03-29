<?php

namespace App\Livewire\Pagina\RegistarArtista;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.registar.index');
    }
}
