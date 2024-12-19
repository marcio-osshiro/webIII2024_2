@extends('layouts.modelo')

@section('conteudo')
@if (isset($mensagem))
            <div class='alert alert-primary' >nova mensagem: {{$mensagem}}</div>
        @endif

        <h1>Categorias</h1>
        <a href="categoria/novo" class="btn btn-primary">Nova Categoria</a>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descrição</th>
                <th scope="col"></th>
                <th>Apagar</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>

                @foreach($categorias as $categoria)
                    <tr>
                      <th scope='row'>{{$categoria->id}}</th>
                      <td>{{$categoria->descricao}}</td>
                      <td>
                        @if($categoria->imagem)
                            <img src="/storage/imagens/{{$categoria->imagem}}" style="width:50px;">
                        @endif
                      </td>
                      <td>
                      <a class='btn btn-danger' href='categoria/apagar/{{$categoria->id}}'>x</a></td>
                      <td>
                      <a class='btn btn-primary' href='categoria/editar/{{$categoria->id}}'>+</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
@endsection
