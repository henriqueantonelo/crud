<?php
// VALIDANDO A EXISTENCIA DE DADOS
if(isset($_POST["nome"])&& isset($_POST["email"])&& isset($_POST["cidade"])&& isset($_POST["uf"]));
{
if(empty($_POST["nome"]))
    $erro = "Campo nome obrigatório!";
else 
if(empty($_POST["email"]))
    $erro = "Campo e-mail obrigatório!";
else

if(empty($_POST["cidade"]))
    $erro = "Campo cidade obrigatório!";
else 
if(empty($_POST["uf"]))
    $erro = "Campo estado obrigatório!";
else
{

//  variavel      |        server   |  login,senha | (nome banco)
    $conexao = new mysqli("127.0.0.1","root","","crud_henrique" );
    if ($conexao->connect_errno){
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
    //VAMOS TRALIZAR O CADASTRO OU AUTERAÇÃO DOS DADOS ENVIADOS
    $nome   = $_POST["nome"]; 
    $email  = $_POST["email"]; 
    $cidade = $_POST["cidade"]; 
    $uf     = $_POST["uf"]; 
                                             //tem que ter apostrofo (``)                    
    $stmt = $conexao-> prepare("INSERT INTO cliente(nome,email,cidade,uf)VALUES(?,?,?,?)");
    $stmt-> bind_param('ssss',$nome,$email,$cidade,$uf);
    
    if(!$stmt->execute())
    {
        $erro = $stmt->error;
    }
    else{
        header("location: sucesso.php");;
    }
  }
}
if(isset($erro))
echo'<div style="color:#F00>"'.$erro.'</div><br>';
if(isset($sucesso))
echo'<div style= "color: green">'.$sucesso.'</div><br>';

echo"<a href='index.php'>Voltar</a>";
?>
