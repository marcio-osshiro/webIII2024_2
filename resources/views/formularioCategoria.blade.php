@extends('layouts.modelo')

@section('conteudo')
    <h1>Categoria</h1>
    <form action="{{url('categoria/salvar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="{{$categoria->id}}">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{$categoria->descricao}}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
