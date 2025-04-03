<?php

namespace App\Livewire\Pagina\Artista\Componente;

use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\CamposMusica; 


class Musica extends Component
{
    use WithFileUploads;
    #[Validate('required|string')]
    public $titulo;

    #[Validate('required|float, precision:2')]
    public $preco;
    #[Validate('required|string')]
    public $tema;
    #[Validate('required|file|mimes:mp3,wav,ogg|max:10240')]
    public $musica;
    #[Validate('required|file|mimes:jpg,png,webp|max:10240')]
    public $foto_capa_music;




    public function criarMusica()
    {

        $validatedData = $this->validate();
        dd($validatedData); // Verifique os dados validados
        $caminho = $this->musica->store('musicas', 'public');
        dd($caminho); // Verifique o caminho do ficheiro de música
        $fotoCapa = $this->foto_capa_music->store('photos', 'public');
        dd($fotoCapa); // Verifique o caminho da foto de capa

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
        return view('pagina.artista.componente.musica');
    }
}
