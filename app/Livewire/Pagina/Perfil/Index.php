<?php

namespace App\Livewire\Pagina\Perfil;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    public $showForm = false; // Adiciona a propriedade para controlar a exibição do formulário

    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.perfil.index');
    }

    // Método para alternar a visibilidade do formulário
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }
}

