<?php

namespace App\Livewire\Pagina\Artista\Componente;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Musica;

class FormEditMusic extends Component
{
    use WithFileUploads;
    #[Validate('required|string')]
    public $titulo;

    #[Validate('required')]
    public $preco;
    #[Validate('required|string')]
    public $tema;
    #[Validate('required|file|mimes:mp3,wav,ogg|max:10240')]
    public $file_url;
    

    public $musicaId;

    public $musicaAnt;

    public $musica;

    public function mount($musicaId)
    {

        $this->musicaId = $musicaId;
        $this->musica = Musica::find($musicaId); // Corrigido: acessar diretamente $musicaId
        $this->musicaAnt = $this->musica;
        if ($this->musica) {
            $this->titulo = $this->musica->title;
            $this->preco = $this->musica->price;
            $this->tema = $this->musica->genero;
            $this->file_url = $this->musica->file_url;
            
        }
    }

    public function fecharPopUpEdit()
    {
        $this->dispatch('EditMusic');
    }
    public function editarMusica()
    {
        $this->validate();

        $caminho = $this->file_url->store('musicas', 'public');
        //$fotoCapa = $this->foto_capa_music->store('photos', 'public');

        

        $this->musica->artist_id = Auth::id();
        $this->musica->title = $this->titulo;
        $this->musica->price = $this->preco;
        $this->musica->genero = $this->tema;
        //$this->musica->foto_capa_music = $fotoCapa;
        $this->musica->file_url = $caminho;
        $this->musica->save(); // Save the changes


        
        $this->dispatch('EditMusic');

    }




    public function render()
    {
        return view('pagina.artista.componente.form_edit_music');
    }
}
