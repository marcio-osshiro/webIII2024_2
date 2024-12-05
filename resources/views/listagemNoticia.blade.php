@extends('layouts.modelo')

@section('conteudo')
    <h1>Noticias</h1>
    <a href="noticia/novo" class="btn btn-primary">Nova Notícia</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Data</th>
            <th scope="col">Autor</th>
            <th scope="col">Categoria</th>
            <th>Apagar</th>
            <th>Editar</th>
            </tr>
        </thead>
        <tbody>

            @foreach($noticias as $noticia)
                <tr>
                    <th scope='row'>{{$noticia->id}}</th>
                    <td>{{$noticia->titulo}}</td>
                    <td>{{$noticia->data->format('d/m/Y')}}</td>
                    <td>{{$noticia->autor}}</td>
                    <td>{{$noticia->categoria->descricao}}</td>
                    <td>
                    <a class='btn btn-danger' href='noticia/apagar/{{$noticia->id}}'>x</a></td>
                    <td>
                    <a class='btn btn-primary' href='noticia/editar/{{$noticia->id}}'>+</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


