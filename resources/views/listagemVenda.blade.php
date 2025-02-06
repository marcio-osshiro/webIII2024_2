@extends('layouts.modelo')

@section('conteudo')
@if (isset($mensagem))
            <div class='alert alert-primary' >nova mensagem: {{$mensagem}}</div>
        @endif

        <h1>Vendas</h1>
        <a href="venda/novo" class="btn btn-primary">Nova Venda</a>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
                <th scope="col">Cliente</th>
                <th scope="col">Documento</th>
                <th scope="col">Valor</th>
                <th>Apagar</th>
                <th>Editar</th>
                <th>Itens</th>
              </tr>
            </thead>
            <tbody>

                @foreach($vendas as $venda)
                    <tr>
                      <th scope='row'>{{$venda->id}}</th>
                      <td>{{$venda->data->format('d/m/Y')}}</td>
                      <td>{{$venda->cliente}}</td>
                      <td>{{$venda->documento}}</td>
                      <td>{{$venda->valor}}</td>
                      <td>
                      <a class='btn btn-danger' href='venda/apagar/{{$venda->id}}'>x</a></td>
                      <td>
                      <a class='btn btn-primary' href='venda/editar/{{$venda->id}}'>+</a></td>
                      <td>
                      <a class='btn btn-primary' href='venda/item/{{$venda->id}}'>Item</a></td>
                    </tr>
                @endforeach
            </tbody>
          </table>
@endsection
