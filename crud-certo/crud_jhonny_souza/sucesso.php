<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sucesso</title>
    <link rel="stylesheet" href="sucesso.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container">
      <div class="wrapper" action="encontrar-BACK.php" method="POST">
        <div class="box">
          <h1>Dados cadastrados com sucesso!</h1>
          <div class="button-container">
            <br />
            <a href="index.php"> 
              <button>Voltar</button> 
            </a>
          </div>
        </div>
      </div>
    </div>
    <div>
    <nav class="navbar">
        <ul>
          <li><a href="index.php" class="fa-solid fa-house" title="Menu"></a></li>
          <li>
            <a
              href="procurar.php"
              class="fa-solid fa-magnifying-glass"
              title="Buscar usuário"
            ></a>
          </li>
          <li><a href="formulario.php" title="Cadastrar usuário">CADASTRAR</a></li>
          <li><a href="TABELA-PHP.php" title="Listar usuários">LISTAR</a></li>
          <li><a href="LISTA.php">LISTA</a></li>
          <li><a href="atualizar.php" title="Atualizar usuário">ATUALIZAR</a></li>
          <li>
            <a href="apagar.php" class="fa-solid fa-eraser" title="Apagar usuário"></a>
          </li>
        </ul>
      </nav>
    </div>
  </body>
</html>