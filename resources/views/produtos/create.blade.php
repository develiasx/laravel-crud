<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Cadastrar um novo produto</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    
    <body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


        <h1 class="titulo">CADASTRE SEU PRODUTO</h1>
        
        <div class="form">
            <form action="{{route('registrar_produto') }}" method="POST" autocomplete="off">
                
                @csrf
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">

                <label for="custo">Custo</label>
                <input type="text" id="custo" name="custo">

                <label for="preco">Preco</label>
                <input type="text" id="preco" name="preco">

                <label for="quantidade">Quantidade</label>
                <input type="text" id="quantidade" name="quantidade">

                <button type="submit">Salvar</button>
                <a href="{{route('produtos.home')}}">Voltar</a>
            </form>
        </div>
    
    </body>
</html>