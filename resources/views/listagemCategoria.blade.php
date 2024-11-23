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
        <?php
          if (isset($mensagem)) {
            echo "<div class='alert alert-primary' >$mensagem</div>";
          }
        ?>

        <h1>Categorias</h1>
        <a href="novo" class="btn btn-primary">Nova Categoria</a>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Descrição</th>
                <th>Apagar</th>
                <th>Editar</th>
              </tr>
            </thead>
            <tbody>

              <?php
                foreach($categorias as $categoria) {
                  echo "
                    <tr>
                      <th scope='row'>{$categoria->id}</th>
                      <td>{$categoria->descricao}</td>
                      <td>
                      <a class='btn btn-danger' href='apagar/{$categoria->id}'>x</a></td>
                      <td>
                      <a class='btn btn-primary' href='editar/{$categoria->id}'>+</a></td>
                    </tr>
                  ";
                }
              ?>
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
