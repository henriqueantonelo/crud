<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atualizar</title>
    <link rel="stylesheet" href="ATUALIZAR-CSS.css" />
    <!-- Fontes do Font-Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
<body>
    <?php 
    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
        $conexao = new mysqli("127.0.0.1","root","","crud_henrique" );
        // Caso aconteça erro de conexão
    if ($conexao->connect_errno){
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    // Arrumar os acentos
    $conexao-> set_charset("utf8");
    $sql = "SELECT * FROM cliente WHERE id='$id';";
    // echo $sql."<br>";
    $result = $conexao-> query($sql);
    if ($result->num_rows > 0) 
        {
            while ($linha = $result-> fetch_assoc())
            {
            $nome = $linha['nome'];
            $email = $linha['email'];
            $cidade = $linha['cidade'];
            $uf = $linha['uf'];
            }
        }else{

            header("location: naoencontrado.php"); 
        }
        $conexao-> close()."<br>";
    } 
    ?>
    <div class="container">
<form action="ATUALIZAÇÃO.php" method="POST">
  <h1>ATUALIZAR</h1>
  <div class="forms-container">
    <!-- nome -->
    <label >Nome</label>
    <div class="input-container">
      <div class="fa-solid fa-user"></div>
    </div>
    <input type="text" name="nome" placeholder="Digite seu nome"  value="<?=$nome?>"/>
    <br />
    <!-- email -->
    <label>Email</label>
    <div class="input-container">
      <div class="fa-solid fa-envelope"></div>
    </div>
    <input
    type="email" name="email" placeholder="Digite seu e-mail"  value="<?=$email?>"
    />
    <br />
    <!-- cidade -->
    <label>Cidade</label>
    <div class="input-container">
      <div class="fa-solid fa-city"></div>
    </div>
    <input type="text" name="cidade" placeholder="Digite sua cidade"  value="<?=$cidade?>"
    />
    <br />
    <!-- uf -->
    <label>Unidade Federativa (UF)</label>
    <div class="input-container">
      <div class="fa-solid fa-location-dot"></div>
    </div>
    <input type="text" name="uf" placeholder="Digite seu estado" value="<?=$uf?>"
    />
    <br />
    <input type="hidden" value="<?=$id?>" name="id">
    <button type="submit">Atualizar</button>
  </div>
</form>
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
