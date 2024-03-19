<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar</title>
</head>
<body>
    <h1>Atualizar Dados</h1>
    <?php 
    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
        $conexao = new mysqli("127.0.0.1","root","","crud_henrique" );// Caso aconteça erro de conexão
        // Caso aconteça erro de conexão
    if ($conexao->connect_errno){
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    // Arrumar os acentos
    $conexao-> set_charset("utf8");
    $sql = "SELECT * FROM cliente WHERE id='$id';";
    echo $sql."<br>";
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
            echo "Sem resultados!";
        }
        $conexao-> close()."<br>";
    } 
?>
<form action="atu-BACK.php" method="POST">
<label >nome:</label>
<input type="text" name="nome" value="<?=$nome?>">
<br>
<br>
<label >E-mail:</label>
<input type="email" name="email" value="<?=$email?>">
<br>
<br>
<label >Cidade:</label>
<input type="text" name="cidade" value="<?=$cidade?>">
<br>
<br>
<label >UF:</label>
<input type="text" name="uf" value="<?=$uf?>">
<br>
<br>
<input type="hidden" value="<?=$id?>" name="id">
<button type="submit">Atualizar</button>
</form>
</body>
</html>
