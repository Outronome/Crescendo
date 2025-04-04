<?php

namespace App\Livewire\Pagina\Artista;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Musica;
use Livewire\Attributes\On;

class Index extends Component
{
    use WithFileUploads;
    #[Validate('required|string')]
    public $titulo;

    #[Validate('required')]
    public $preco;
    #[Validate('required|string')]
    public $tema;
    #[Validate('required|file|mimes:mp3,wav,ogg|max:10240')]
    public $musica;
    #[Validate('required|file|mimes:jpg,png,webp|max:10240')]
    public $foto_capa_music;

    public $criar = false;

    public $modal = false;

    public function editarMusica()
    {
        $this->modal = true;

    }

    public function abrirCriarMusica()
    {
        $this->criar = true;
    }
    #[On('fecharModalNewMusic')]

    public function fecharPopUpNew()
    {
        $this->criar = false;
    }

    #[On('EditMusic')]
    public function XPTO()
    {
        dd();
        $this->modal = false;
    }

    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.artista.index');
    }
}