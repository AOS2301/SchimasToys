<?php 
include_once "conexao.php";

$conn = mysqli_connect($localhost, $user, $password, $banco); 
if(!$conn){
    echo  "<script>alert('Não foi possível conectar ao Banco de Dados. Usuário ou Senha inválidos!');</script>";
	header('Location: login.html');
}
    $user = $_POST['email_usuario'];
	$senha = $_POST['senha_usuario'];
	
	$sql = "SELECT id,nome_usuario,telefone_usuario FROM usuarios WHERE (email_usuario='$user') AND (senha_usuario='$senha')";
	$result = mysqli_query($conexao, $sql);
	$row = mysqli_num_rows($result);

    if ($row > 0)
	{
		// cria sessão
		session_start();
		$nome="Usuario";
		while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
		{
			$id = $row[0];
			$nome = $row[1];
			$Telefone = $row[2];
		}
		$_SESSION['id'] = $id;
		$_SESSION['nome_usuario'] = retornaNome($nome);
		$_SESSION['telefone_usuario'] = $Tipouser;

		$_SESSION['usuario'] = $user;
		$_SESSION['senha'] = $password;
		header('Location: index.php');
	}
	else
	{
		echo  "<script>alert('Não foi possível conectar ao Banco de Dados. Usuário ou Senha inválidos!');</script>";
		header('Location: login.html');
	}
	function retornaNome($nomeCompleto) {
		$nome = explode(' ', $nomeCompleto); // separa o nome completo em um array de palavras
		if (count($nome) > 1) {
		  array_pop($nome); // remove o último nome (sobrenome)
		}
		return $nome[0]; // retorna o primeiro nome ou o nome completo, caso seja apenas um nome
	  }


?>