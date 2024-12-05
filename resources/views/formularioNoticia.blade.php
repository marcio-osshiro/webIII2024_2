@extends('layouts.modelo')

@section('conteudo')
    <h1>Notícia</h1>
    <form action="{{url('noticia/salvar')}}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="id" class="form-label">ID</label>
            <input readonly type="text" class="form-control" id="id" name="id" value="{{$noticia->id}}">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" value="{{$noticia->titulo}}">
        </div>
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" id="data" name="data" value="{{$noticia->data->format('Y-m-d')}}">
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input type="text" class="form-control" id="autor" name="autor"  value="{{$noticia->autor}}">
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select" name="categoria_id" id="categoria_id">
                @foreach($categorias as $categoria)
                    <option {{ $noticia->categoria == null || $categoria->id != $noticia->categoria->id ? '' : 'selected' }} value='{{$categoria->id}}'>{{$categoria->descricao}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
