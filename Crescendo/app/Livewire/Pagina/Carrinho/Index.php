<?php

namespace App\Livewire\Pagina\Carrinho;

use Livewire\Attributes\Layout;
use Livewire\Component;
use \App\Models\Carrinho; 
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $detalhes_carrinho;
    private $user_id;
    private $carrinho;
    public function mount (){
        $this->user_id = Auth::id();
        $this->carrinho = Carrinho::where('user_id',$this->user_id)->first();
        if($this->carrinho == null){
            Carrinho::create([
                'user_id' => $this->user_id,
            ]);
        }
    }
    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.carrinho.index');
    }
}
