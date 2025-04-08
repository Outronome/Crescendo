<?php

namespace App\Livewire\Pagina\Artista\Componente;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\Musica;

class FormNewMusic extends Component
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

    public function fecharPopUp()
    {
        $this->dispatch('fecharModalNewMusic');
    }
    public function criarMusica()
    {

        $validatedData = $this->validate();
        $caminho = $this->musica->store('musicas', 'public');
        $fotoCapa = $this->foto_capa_music->store('photos', 'public');


        $caminho = $this->musica->store('musicas', 'public');
        Musica::create([
            'artist_id' => Auth::id(),
            'title' => $this->titulo,
            'price' => $this->preco,
            'genero' => $this->tema,
            'file_photo' => $this->foto_capa_music->store('photos', 'public'),
            'file_url' => $caminho,
        ]);

        $this->reset(['titulo', 'preco', 'tema', 'musica', 'foto_capa_music']);
        $this->dispatch('fecharModalNewMusic');
    }

    public function render()
    {
        return view('pagina.artista.componente.form_new_music');
    }
}
