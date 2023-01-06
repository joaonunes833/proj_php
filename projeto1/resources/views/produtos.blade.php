@extends('layouts.app')

@section('content')
    <h1>Produtos</h1>
    @foreach ($livros as $livro)
        <div class="produto">
            <a href="{{route ('products.show',$livro->id)}}">
                <img src="{{ $livro->url}}" alt="img/produto">´
                <h2>{{ $livro->nome}}</h2>
            </a>
        </div>
        
    @endforeach
    <br/><a href="/">VOLTAR</a>
@endsection