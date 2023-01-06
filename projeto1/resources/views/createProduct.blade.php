@extends('layouts.app')

@section('content')
    <h1>Criar Produto</h1>
    <div class="detalhes">
        <p class="message">{{session('mssg')}}</p>
        {{-- <div class="error">
            <ul>
                @foreach ($erros->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div> --}}
        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Nome do Produto:</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label for="autorId">ID - Autor:</label>
            <input type="text" name="autorId" id="autorId">
            <br>
            <label for="desc">Descrição do Produto:</label>
            <input type="text" name="desc" id="desc">
            <br>
            <label for="url">Imagem:</label>
            <input type="file" name="url" id="url">
            <br>
            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco">
            <br>
            <label for="createdBy">Criado por -> ID:</label>
            <input type="text" name="createdBy" id="createdBy">
            <br>
            <input type="submit" value="Criar Produto">
        </form>
        <a href="/produtos">VOLTAR</a>
    </div>
@endsection
