<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="{{ asset('css/delete.css') }}" rel="stylesheet">

        <title>Excluir um produto</title>
       
    </head>
    
    <body>      
        <form action="" method="POST">
        @csrf

        <label for="">Tem certeza que deseja excluir este produto?</label></br />
        <input type="text" name="nome" value="{{ $produto->nome }}"><br />
        <button type="submit">Sim</button><br>
        <button type="submit">Não</button>

        </form>
             
    </body>
</html>