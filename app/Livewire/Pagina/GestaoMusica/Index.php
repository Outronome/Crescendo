<?php
namespace App\Livewire\Pagina\GestaoMusica;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Musica;
use Livewire\Attributes\On;



class Index extends Component
{
    public $musicas;

    public $criar= false;

    public $modal = false;


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
    public function fecharPopUp()
    {
        $this->criar = false;
    }
    #[On('EditMusic')]
    public function fecharPopUpEdit()
    {
        $this->modal = false;
    }

    public function editarMusica()
    {
        $this->modal = true;
        $this->criar = false;
        
    }

    

    #[Layout('layout.front')]
    public function render()
    {
        $this->musicas = Musica::with('artist')->get();
        return view('pagina.gestao-musica.index');
    }
}