@extends('layouts.layout')

@section('content')
    <h1>Bem vindo</h1>
    <div class="intro">
        <img src="/img/loja.jpg" alt="loja/img"><br/>
        
        <a href={{route('products.index')}}>Ver Livros</a>
    </div>
@endsection