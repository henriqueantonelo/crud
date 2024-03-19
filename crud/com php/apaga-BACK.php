<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar</title>
</head>
<body>
    <h1>Apagado</h1>

<?php
if (isset($_POST['id']))
{
    $id = $_POST['id'];
    //Conecta com o BANCO DE DADOS
    $conexao = new mysqli("127.0.0.1","root","","crud_henrique" );// Caso aconteça erro de conexão
    if ($conexao->connect_errno) // Caso de erro
    {
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    $conexao->set_charset("utf8"); //Acentuação

    $sql = "SELECT * FROM cliente WHERE id=$id";
    echo $sql."<br>";
    $result = $conexao->query($sql);
    if($result->num_rows > 0)
    {
        while($linha = $result->fetch_assoc())
        {
            echo "Nome:".$linha["nome"]."<br>";
            echo "E-mail:".$linha["email"]."<br>";
            echo "Cidade:".$linha["cidade"]."<br>";
            echo "UF:".$linha["uf"]."<br>";          
        }
    } else
    {
        echo "Sem Resultados";
    }
    $conexao -> close();
}
?>       
<form action="elimina-BACK.php" method="POST" onsubmit="return confirm('Confirma?');">
    <input type="submit" value="Apagar">
    <input type="hidden"value="<?=$id?>" name="id">
    <a href="index.php">Voltar</a>
</form> 
</body>
</html>
