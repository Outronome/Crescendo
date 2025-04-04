<?php

namespace App\Livewire\Pagina\Carrinho;

use Livewire\Component;
use App\Models\Carrinho;
use App\Models\DetalheCarrinho;
use App\Models\Musica;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

class Index extends Component
{
    public $itens = [];

    public function mount()
    {
        $this->loadCarrinho();
    }

    public function loadCarrinho()
    {
        $user = auth()->user();

        // Busca o carrinho do usuário, cria se não existir
        $carrinho = Carrinho::firstOrCreate(['user_id' => $user->id]);

        // Carrega os itens do carrinho
        $this->itens = $carrinho->detalhesCarrinho()->with('musica')->get();
    }

    public function adicionarMusica($musicaId)
    {
        $user = Auth::user();
        $carrinho = Carrinho::firstOrCreate(['user_id' => $user->id]);

        $item = DetalheCarrinho::where('carrinho_id', $carrinho->id)
                               ->where('musica_id', $musicaId)
                               ->first();

        if ($item) {
            $item->increment('quantidade');
        } else {
            DetalheCarrinho::create([
                'carrinho_id' => $carrinho->id,
                'musica_id' => $musicaId,
                'quantidade' => 1,
            ]);
        }

        session()->flash('success', 'Música adicionada ao carrinho!');
    }


    public function removerMusica($musicaId)
    {
        $user = auth()->user();
        $carrinho = Carrinho::where('user_id', $user->id)->first();

        if ($carrinho) {
            $item = DetalheCarrinho::where('carrinho_id', $carrinho->id)
                                   ->where('musica_id', $musicaId)
                                   ->first();

            if ($item) {
                $item->delete();
            }
        }

        $this->loadCarrinho();
    }

    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.carrinho.index', [
            'itens' => $this->itens,
        ]);
    }
}
