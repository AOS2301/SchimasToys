<?php
// Parâmetros de conexão com o banco de dados
$localhost = "localhost"; // Nome do servidor do banco de dados
$user = "root"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$banco = "schimas_toys"; // Nome do banco de dados

$conexao= new mysqli($localhost, $user, $password, $banco);
/*if($conexao->connect_errno){
    echo "Erro!";
}
else{
    echo "conexão executada com sucesso";
} */

?>