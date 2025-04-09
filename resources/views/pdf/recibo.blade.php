<h1>Recibo de Compra</h1>

<p><strong>Cliente:</strong> {{ $compra->user->name }}</p>
<p><strong>Data:</strong> {{ $compra->created_at->format('d/m/Y H:i') }}</p>

<table width="100%" border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>Música</th>
            <th>Quantidade</th>
            <th>Preço Unitário</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($compra->musicas as $musica)
        <tr>
            <td>{{ $musica->title }}</td>
            <td>{{ $musica->pivot->quantidade }}</td>
            <td>R$ {{ number_format($musica->price, 2, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<p><strong>Total:</strong> R$ {{ number_format($compra->total, 2, ',', '.') }}</p>
