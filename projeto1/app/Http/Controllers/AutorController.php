<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function show($id){
        $autor = Autor::findOrFail($id);
        return view('detalhes', ["autor"=> $autor]);
    }
}
