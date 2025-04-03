<?php
namespace App\Livewire\Pagina\GestaoMusica;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Musica;

class Index extends Component
{
    public $musicas;

    public function mount()
    {
        $this->musicas = Musica::all();
    }

    public function toggleActive($id)
    {
        $musica = Musica::findOrFail($id);
        $musica->active = !$musica->active;
        $musica->save();

        // Refresh the list
        $this->musicas = Musica::all();
    }

    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.gestao-musica.index');
    }
}