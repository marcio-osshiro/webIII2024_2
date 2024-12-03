<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
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
                      <td>{{$noticia->data}}</td>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
