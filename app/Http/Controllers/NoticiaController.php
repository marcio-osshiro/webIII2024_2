<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Http\Requests\NoticiaRequest;

class NoticiaController extends Controller
{
    function listar() {
        $noticias = Noticia::orderByRaw('data DESC, id')->get();
        return view('listagemNoticia', compact('noticias'));
    }

    function novo() {
        $noticia = new Noticia();
        $noticia->id = 0;
        $noticia->data = date('Y-m-d');
        $categorias = Categoria::orderBy('descricao')->get();
        return view('formularioNoticia', compact('noticia', 'categorias'));
    }

    function salvar(NoticiaRequest $request) {
        $id = $request->input('id');
        if ($id == 0) {
            $noticia = new Noticia();
        } else {
            $noticia = Noticia::find($request->input('id'));
        }
        $noticia->titulo = $request->input('titulo');
        $noticia->data = $request->input('data');
        $noticia->autor = $request->input('autor');
        $noticia->categoria_id = $request->input('categoria_id');
        $noticia->save();
        return redirect('noticia');
    }

    function editar($id) {
        $noticia = Noticia::find($id);
        $categorias = Categoria::orderBy('descricao')->get();
        return view('formularioNoticia', compact('noticia', 'categorias'));
    }

    function apagar($id) {
        $noticia = Noticia::find($id);
        $noticia->delete();
        return redirect('noticia');
    }
}
