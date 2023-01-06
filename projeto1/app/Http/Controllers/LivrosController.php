<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivrosController extends Controller
{

    public function index(){  
        $livros = Livro::all();
        return view('produtos',["livros" => $livros]);
    }

    public function show($id){
        $livro = Livro::findOrFail($id);
        return view('detalhes', ["livro"=> $livro]);
    }

    public function create(){
        return view('createProduct');
    }

    public function store()
    {
        $nome = request('nome');
        $desc = request('desc');
        $autorId = request('autorId');
        $url = request('url');
        $preco = request('preco');
        $createdBy = request('createdBy');

        $livro = new Livro();
        $livro-> nome = $nome;
        $livro-> autorId = $autorId;
        $livro-> desc = $desc;  
        $livro-> url = $url;
        $livro-> preco = $preco;
        $livro-> createdBy = $createdBy;

        $livro->save();

        return redirect('/produtos/create')->with('mssg','Produto Criado');
    }

    public function destroy($id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();

        return redirect('/produtos');
    }
}
