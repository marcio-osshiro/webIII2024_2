<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Categoria;

class NoticiaController extends Controller
{
    function listar() {
        $noticias = Noticia::orderByRaw('data DESC, id')->get();
        return view('listagemNoticia', compact('noticias'));
    }

    function novo() {
        $noticia = new Noticia();
        $noticia->id = 0;
        $categorias = Categoria::orderBy('descricao')->get();
        return view('formularioNoticia', compact('noticia', 'categorias'));
    }
}
