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
$conexao = new mysqli("127.0.0.1","root","","crud_henrique" );// Caso aconteça erro de conexão
if ($conexao->connect_errno){
        echo "Ocorreu um erro na conexão com o banco de dados.";
        exit;
    }
// REALIZA O CADASTRO OU ATUALIZAÇÃO NO BANCO DE DADOS.
$nome   = $_POST["nome"]; 
$email  = $_POST["email"]; 
$cidade = $_POST["cidade"]; 
$uf     = $_POST["uf"]; 
$id     = $_POST['id'];
    $sql= "UPDATE `cliente` SET nome='$nome', email='$email',cidade='$cidade',uf= '$uf' WHERE id='$id'";
    echo $sql."<br>";   
    if ($conexao->query($sql)=== TRUE){
    $sucesso="Alterado com sucesso!";
} else{
    $erro = "ERRO!!!!!!!!!!!!".$sql."<br>".$conexão->errpr;
}$conexao->close();
}

}
if(isset($erro))
echo'<div style="color:#F00>"'.$erro.'</div><br>';
if(isset($sucesso))
echo'<div style= "color: green">'.$sucesso.'</div><br>';

echo"<a href='index.php'>Voltar</a>";

?>
