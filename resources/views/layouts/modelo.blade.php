<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site de Notícias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        nav>ul {
            display: flex;
            background-color: black;
            list-style-type: none;
        }
        a {
            display: block;
            padding: 1rem;
            text-decoration: none;
            color: white;
            font-size: 1.5rem;
            font-family: arial, sans-serif;
        }
        a:hover {
            background-color: gray;
        }
        </style>

    </head>
  <body>
    <nav>
        <ul>
            <li>
                <a href="{{url('/')}}">Inicio</a>
            </li>
            <li>
                <a href="{{url('categoria')}}">Categoria</a>
            </li>
            <li>
                <a href="{{url('noticia')}}">Notícia</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        @yield('conteudo')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
