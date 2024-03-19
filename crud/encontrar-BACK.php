<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procurar</title>
</head>
<body>
    <h1>Encontrar</h1>
    <?php 
    if(isset($_POST["nome"]))
    {
        $nome = $_POST["nome"];
        $conexao = new mysqli("127.0.0.1","root","","crud_henrique" );// Caso aconteça erro de conexão
        // Caso aconteça erro de conexão
    if ($conexao->connect_errno){
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    // Arrumar os acentos
    $conexao-> set_charset("utf8");
    $sql = "SELECT * FROM cliente WHERE nome='$nome';";
    echo $sql."<br>";
    $result = $conexao-> query($sql);
    if ($result->num_rows > 0) 
        {
            while ($linha = $result-> fetch_assoc())
            {
            echo "Nome:".$linha['nome']."<br>";
            echo "E-mail:".$linha['email']."<br>";
            echo "Cidade:".$linha['cidade']."<br>";
            echo "UF:".$linha['uf']."<br><br>";
            }
        }else{
            echo "Sem resultados!";
        }
        $conexao-> close()."<br>";
    }
    echo "<a href='index.php'>Voltar</a>";
    ?>
</body>
</html>
