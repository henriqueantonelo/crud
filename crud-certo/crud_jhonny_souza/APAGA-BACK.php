<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elimina</title>
</head>
<body>
    <?php
    if(isset($_POST["id"]))
    {
        $id = $_POST["id"];
        $conexao = new mysqli ("127.0.0.1","root","","crud_henrique"); //banco
        if($conexao->connect_errno)// caso nao conecte
        {
            echo "Ocorreu um erro na conexão com o banco de dados.";
            exit;
        }
        //
        $nome   = $_POST["nome"]; 
        $email  = $_POST["email"]; 
        $cidade = $_POST["cidade"]; 
        $uf     = $_POST["uf"]; 
        $id     = $_POST['id'];
        $sql= "UPDATE `cliente` SET nome='$nome', email='$email',cidade='$cidade',uf= '$uf' WHERE id='$id'";
        //
        $conexao->set_charset("utf8"); //Acentuação
        $sql = "DELETE FROM cliente WHERE id=$id";
        echo $sql."<br>";
        if($conexao->query($sql)=== TRUE){
            header("location: sucesso.php");
        }
        else{
            echo "Erro:".$sql."<br>".$conexao->error;
        }
        $conexao->close();
    }    
?>
</body>
</html>
