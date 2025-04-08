<?php

namespace App\Livewire\Pagina\Tema;

use App\Models\Tema;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Index extends Component
{
    #[Validate('required')]
    public $nome;
    public ?string $pesquisa;
    public $temas;
    public $editar = false;
    public $previsualizar = false;

    #[Layout('layout.front')]
    public function render()
    {
        
        if (isset($this->pesquisa)) {
            $pesquisa = '%' . $this->pesquisa . '%';
            $this->temas = Tema::where('nome', 'like', $pesquisa)->get();
        } else {
            $this->temas = Tema::all();
        }
        $this->iniciarEditar();
        return view('pagina.tema.index');
    }

    private function iniciarEditar() {
        if(!isset($this->editar)){
            for( $i = 0 ; $i < $this->temas->count() ; $i++ ) {
                $this->editar[$i]=false;
            }
        }
    }

    public function editarTema($id){
        for( $i = 0 ; $i < $this->temas->count() ; $i++ ) {
            $this->editar[$i]=false;
        }
        $this->editar[$id] = true;
    }

    public function guardarTema($id){
        
        if($this->nome!=null){
            $tema = Tema::find($id+1);
            $tema->nome = $this->nome;
            $tema->save();
        }
        $tema = '';
        $this->fecharEditar($id);
        $this->render();
    }

    private function fecharEditar($id) {
        $this->editar[$id] = false;
    }
    public function adicionar(){
        $this->validate();
        Tema::create([
            'nome' => $this->nome,
        ]);
    }

}
