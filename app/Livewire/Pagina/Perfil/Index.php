<?php

namespace App\Livewire\Pagina\Perfil;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Blog;

class Index extends Component
{
    public $showForm = false;
    public $blogs; // Adiciona a propriedade $blogs

    #[Layout('layout.front')]
    public function render()
    {
        $this->blogs = Blog::all(); // Busca todos os posts do blog
        return view('pagina.perfil.index', ['blogs' => $this->blogs]); // Passa os posts para a view
    }

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }
}