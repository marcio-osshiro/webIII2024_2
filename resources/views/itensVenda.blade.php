@extends('layouts.modelo')

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1>Venda</h1>
    <div class="row">
        <div class="col mb-3">
            <label for="id" class="form-label">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="{{$venda->id}}">
        </div>
        <div class="col mb-3">
            <label for="data" class="form-label">Data</label>
            <input readonly type="date" class="form-control id="data" name="data" value="{{old('data', $venda->data)}}">
        </div>
        <div class="col mb-3">
            <label for="cliente" class="form-label">Cliente</label>
            <input readonly type="text" class="form-control id="cliente" name="cliente" value="{{old('cliente', $venda->cliente)}}">
        </div>
        <div class="col mb-3">
            <label for="documento" class="form-label">Documento</label>
            <input readonly type="text" class="form-control id="documento" name="documento" value="{{old('documento', $venda->documento)}}">
        </div>
        <div class="col mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input readonly readonly type="text" class="form-control id="valor" name="valor" value="{{old('valor', $venda->valor)}}">
        </div>
    </div>
    <form action="{{url('venda/salvar_item')}}" method="POST">
        @csrf

        <input type="hidden" name="venda_id" value="{{$venda->id}}">

            <input type="readonly" class="form-control" id="id" name="id" value="{{$item->id}}">

        <div class="row">
            <div class="col mb-3">
                <label for="produto_id" class="form-label">Produto</label>
                <select class="form-select" name="produto_id" id="produto_id">
                    @foreach($produtos as $produto)
                        <option {{ $item->produto == null || $produto->id != old('produto_id', $item->produto->id) ? '' : 'selected' }} value='{{$produto->id}}'>{{$produto->nome}} (R$ {{$produto->valor}}) </option>
                    @endforeach

                </select>


            </div>
            <div class="col mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="numeric" class="form-control" id="quantidade" name="quantidade" value="{{old('quantidade', $item->quantidade)}}">
            </div>
            <div class="col mb-3">
                <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            </div>
        </div>
    </form>

    <h2>Itens</h2>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Produto</th>
                <th scope="col">Vr.Unit.</th>
                <th scope="col">Quant.</th>
                <th scope="col">Vr.Total</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach($venda->itens as $item)
                    <tr>
                      <td>{{$item->produto->nome}}</td>
                      <td>{{$item->valor_unitario}}</td>
                      <td>{{$item->quantidade}}</td>
                      <td>{{$item->valor_total}}</td>
                      <td>
                        <a href="{{url('venda/item/excluir/'.$item->id)}}" class="btn btn-danger">X</a>
                      </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{url('venda')}}" class="btn btn-primary">Retornar</a>

@endsection
