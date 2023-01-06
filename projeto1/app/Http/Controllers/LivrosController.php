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
}
