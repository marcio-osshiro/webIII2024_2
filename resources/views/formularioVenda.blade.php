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

    <form action="{{url('venda/salvar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="{{$venda->id}}">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control id="data" name="data" value="{{old('data', $venda->data->format('Y-m-d'))}}">
        </div>
        <div class="mb-3">
            <label for="cliente" class="form-label">Cliente</label>
            <input type="text" class="form-control id="cliente" name="cliente" value="{{old('cliente', $venda->cliente)}}">
        </div>
        <div class="mb-3">
            <label for="documento" class="form-label">Documento</label>
            <input type="text" class="form-control id="documento" name="documento" value="{{old('documento', $venda->documento)}}">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input readonly type="text" class="form-control id="valor" name="valor" value="{{old('valor', $venda->valor)}}">
        </div>


        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
