<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="tabela.css" />
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
      <div class="wrapper">
        <h1>LISTA DOS CLIENTES</h1>
        <div class="list-wrapper">
          <table>
            <tr>
              <td>
                <div class="scrollable-table">
<?php
$conexao = new mysqli("127.0.0.1","root","","crud_henrique" );
if ($conexao->connect_errno){
    echo "Ocorreu um erro na conexão com o banco de dados.";
    exit;
}
$conexao->set_charset("utf8");
$sql = "SELECT * FROM cliente;";
$result = $conexao->query($sql);
if ($result->num_rows > 0) {
    while ($linha = $result->fetch_assoc()) {
        echo "<table id=\"vertical\">";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Nome</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Email</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Cidade</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>UF</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        echo "<tr>";
        echo "<td>".$linha['nome']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$linha['email']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$linha['cidade']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$linha['uf']."</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Nenhum cliente encontrado.</td></tr>";
}
$conexao->close();
?>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
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
