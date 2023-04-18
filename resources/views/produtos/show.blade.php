<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ver um novo produto</title>
       
    </head>
    
    <body>      
        
                <label for="">Nome</label><br />
                <input type="text" name="nome" value="{{$produto->nome}}"> <br />
                
                <label for="">Custo</label><br />
                <input type="text" name="custo" value="{{$produto->custo}}"> <br />

                <label for="">Preco</label><br />
                <input type="text" name="preco" value="{{$produto->preco}}"> <br />

                <label for="">Quantidade</label><br />
                <input type="text" name="quantidade" value="{{$produto->quantidade}}"> <br />
    
    </body>
</html>