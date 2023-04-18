<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Estoque</title>
        <link href="{{ asset('css/tabela.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
   <body>
   @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
      <h1 style="text-align: center;">Tabela - Controle</h1>
      <table>
         <thead>
            <tr>
               <th>ID</th>
               <th>Nome</th>
               <th>Custo</th>
               <th>Preço</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($produtos as $produto)
            <tr>
               <td>{{ $produto->id }}</td>
               <td>{{ $produto->nome }}</td>
               <td>{{ $produto->custo}}</td>
               <td>{{ $produto->preco }}</td>
               <td>
               <a href="/produtos/editar/{{$produto->id}}"><i class="fas fa-edit"></i></a>
               <a href="/produto/excluir/{{$produto->id}}"><i class="fas fa-trash-alt"></i></a>  
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <a href="{{route('produtos.home')}}">Voltar</a>
   </body>
</html>
