<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{
    public $posts = [];
    public $modo = 'lista'; // lista, editar, comentar
    public $postAtual = null;
    public $comentario = '';
    public $mostrarPopup = false;
    public $mostrarPopupEditar = false;
    public $mostrarPopupComentar = false;
    public $mostrarPopupCriar = false;
    public $novoPost = ['title' => '', 'content' => ''];

    public function mount()
    {
        $this->posts = [
            [
                'id' => 1,
                'title' => 'Crie sua nova ideia com o Laravel Framework.',
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!',
                'date' => '1 de junho de 2020',
                'author' => 'Alex John',
            ],
            // Adiciona mais posts aqui se precisares
        ];
    }

    public function gerirBlogs()
    {
        $this->mostrarPopup = true;
        $this->mostrarPopupCriar = false;
    }

    public function criarNovoPost()
    {
        $this->mostrarPopupCriar = true;
        $this->mostrarPopup = false;
    }

    public function editarPost($postId)
    {
        $post = array_filter($this->posts, function ($post) use ($postId) {
            return $post['id'] == $postId;
        });

        $this->postAtual = !empty($post) ? array_values($post)[0] : null;
        $this->mostrarPopupEditar = true;
    }

    public function adicionarComentario($postId)
    {
        $post = array_filter($this->posts, function ($post) use ($postId) {
            return $post['id'] == $postId;
        });

        $this->postAtual = !empty($post) ? array_values($post)[0] : null;
        $this->mostrarPopupComentar = true;
    }

    public function guardarPost()
    {
        // Lógica para guardar o post editado
        dd('Guardar Post: ', $this->postAtual);
        $this->mostrarPopupEditar = false;
    }

    public function salvarNovoPost()
    {
        $novoId = count($this->posts) + 1; // Cria um ID simples
        $this->posts[] = [
            'id' => $novoId,
            'title' => $this->novoPost['title'],
            'content' => $this->novoPost['content'],
            'date' => now()->format('d de F de Y'), // Usa a data atual
            'author' => 'Tu', // Por agora, o autor é tu
        ];

        // Limpa o formulário e esconde-o
        $this->novoPost = ['title' => '', 'content' => ''];
        $this->mostrarPopupCriar = false;
        $this->modo = 'lista'; // Volta para a lista de blogs
    }

    public function guardarComentario()
    {
        // Lógica para guardar o comentário
        dd('Guardar Comentário: ', $this->comentario);
        $this->mostrarPopupComentar = false;
    }

    public function visualizarPost($postId)
    {
        // Lógica para visualizar o post com o ID $postId
        dd('Visualizar Post: ', $postId); // Substitui por tua lógica
    }

    public function render()
    {
        $posts = $this->posts; // Passa os posts para a vista

        return view('livewire.blog', [
            'posts' => $posts,
        ]);
    }
}