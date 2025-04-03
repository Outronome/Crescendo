<?php
namespace App\Livewire\Pagina\GestaoMusica;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Musica;

class Index extends Component
{
    public $musicas;


    public function toggleActive($id)
    {
        $musica = Musica::findOrFail($id);
        $musica->active = !$musica->active;
        $musica->save();
    }

    public function deleteMusica($id)
    {
        $musica = Musica::findOrFail($id);
        $musica->delete();

    }

    #[Layout('layout.front')]
    public function render()
    {
        $this->musicas = Musica::with('artist')->get();
        return view('pagina.gestao-musica.index');
    }
}