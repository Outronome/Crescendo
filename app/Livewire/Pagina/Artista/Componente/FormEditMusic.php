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
    public $musica;
    #[Validate('required|file|mimes:jpg,png,webp|max:10240')]
    public $foto_capa_music;

    public $musicaId;
    
    public $novoTitulo;

    

    public function fecharPopUp()
    {
        $this->dispatch('fecharModalEditMusic');
    }
    
    public function editarMusica()
    {

        $validatedData = $this->validate();

        
        $musica = Musica::find($this->musicaId); // Buscar música pelo ID
        
        
        
            $musica->artist_id = Auth::id();
            $musica->title = $this->novoTitulo;
            $musica->price = $this->preco;
            $musica->genero = $this->tema;
            $musica->save(); // Save the changes

            $this->reset(['titulo', 'preco', 'tema', 'musica', 'foto_capa_music']);
            $this->dispatch('fecharModalEditMusic');
        
    }

    public function render()
    {
        return view('pagina.artista.componente.form_edit_music');
    }
}
