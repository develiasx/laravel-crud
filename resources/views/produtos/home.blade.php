<!DOCTYPE html>
<html>
<head>
    <title>Construtora Neolítica</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo a Construtora Neolítica</h1>
            <h2>Controle Interno de Produtos</h2>
        <ul>
            <li><a href="{{route('produtos.create')}}">Cadastrar Novo Produto</a></li>
            <li><a href="{{route('produtos.ver')}}">Ver Produtos</a></li>
        </ul>
    </div>
</body>
</html>
