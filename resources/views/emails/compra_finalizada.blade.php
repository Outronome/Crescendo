<h2>Olá {{ $compra->user->name }},</h2>

<p>Sua compra foi concluída com sucesso. Aqui estão os detalhes:</p>

<ul>
    @foreach ($compra->musicas as $musica)
        <li>{{ $musica->title }} - {{ $musica->pivot->quantidade }}x</li>
    @endforeach
</ul>

<p>Total: R$ {{ number_format($compra->total, 2, ',', '.') }}</p>

<p>Obrigado por comprar conosco!</p>
