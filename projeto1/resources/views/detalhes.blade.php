@extends('layouts.layout')

@section('content')
    <h1>Detalhes</h1>
    <div class="detalhes">
        @if (isset($livro))
            <img src="{{$livro->url }}" alt="produto/img">
            <h2>{{$livro->nome}}</h2>
            <p>{{$livro->nome}} <br/>
            {{$livro->desc}} <br/>
            € {{$livro->preco}}</p>
        @else
            <h1>O livro que procura não existe.</h1>
        @endif
        <form action="{{route('products.destroy',$livro->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Eliminar Livro</button>
        </form>
        <a href="/produtos">VOLTAR</a>
    </div>
@endsection