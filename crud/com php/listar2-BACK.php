<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="list.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    </head>
<body>
    <h1>Lista de Clientes 2
        <table border="1px">
            <tr>
                <th>ID      </th>
                <th>Nome    </th>
                <th>E-mail  </th>
                <th>Cidade  </th>
                <th>UF      </th>
            </tr>
<?php 
//     variavel      |        server   |  login,senha | (nome banco)
     $conexao = new mysqli("127.0.0.1","root","","crud_henrique" );
    if ($conexao->connect_errno){
     echo "Ocorreu um erro na conexão com o banco de dados.";
     exit;
        }
// Arrumar os acentos
    $conexao-> set_charset("utf8");

    $sql = "SELECT * FROM cliente;";
    echo $sql."<br>";
    $result = $conexao->query($sql);
    if($result->num_rows > 0){
        while($linha = $result-> fetch_assoc()){
            echo "<tr>";
            echo "<td>".$linha['id']."</td>";
            echo "<td>".$linha['nome']."</td>";
            echo "<td>".$linha['email']."</td>";
            echo "<td>".$linha['cidade']."</td>";
            echo "<td>".$linha['uf']."</td>";
            echo "</tr>";
        }
    } else {
        echo "Sem resultados";
    }
    $conexao->close();
echo "<a href='menu.php'>Voltar</a>"
?>
</table>
    <div>
      <nav class="navbar">
        <ul>
          <li><a href="#" class="fa-solid fa-house" title="Menu"></a></li>
          <li>
            <a
              href="#"
              class="fa-solid fa-magnifying-glass"
              title="Buscar usuário"
            ></a>
          </li>
          <li><a href="#" title="Cadastrar usuário">CADASTRAR</a></li>
          <li><a href="#" title="Listar usuários">LISTAR</a></li>
          <li><a href="#">LISTA</a></li>
          <li><a href="#" title="Atualizar usuário">ATUALIZAR</a></li>
          <li>
            <a href="#" class="fa-solid fa-eraser" title="Apagar usuário"></a>
          </li>
        </ul>
      </nav>
    </div>
</body>
</html>
