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

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nome' => 'required',
            'url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $nome = request('nome');
        $desc = request('desc');
        $preco = request('preco');
        $autorId = request('autorId');

        $url = "";
        if ($request->has('url')){
            $image = $request->file('url');


            $iname = 'prod_'.time();
            $folder='/img/livros/';
            $fileName = $iname.'.'.$image->getClientOriginalExtension();
            $filePath = $folder.$fileName;

            $image->storeAs($folder, $fileName, 'public');
            $url = "/storage/".$filePath;


        }
        
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
