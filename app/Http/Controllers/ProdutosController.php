<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,     
        ]);

        return redirect()->route('produtos.create')->with('success', 'Produto Criado com Sucesso!');

    }
    
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', compact('produtos'));
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function pesquisar(Request $request)
{
    $termo = $request->input('termo');

    $produtos = Produto::where('nome', 'LIKE', "%$termo%")->get();

    return view('produtos.ver')->with('produtos', $produtos);
}


    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        
        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]); 

        return redirect()->route('produtos.ver')->with('success', 'Produto Atualizado com Sucesso');
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }        
    
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.ver')->with('success', 'Produto Excluído com Sucesso');
        ;
        // return redirect()->route('produtos.mensagem')->with('success', 'Produto Excl com Sucesso!');   
    } 

    public function home()
    {
        return view('produtos.home');
    }

    // public function mensagem()
    // {
    //     return view('produtos.mensagem');
    // }
}
