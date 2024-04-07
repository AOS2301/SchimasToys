<?php 
include_once('conexao.php');
 
    if(isset($_POST['submit'])){
        include_once('conexao.php');

        $nome = $_POST['nome_usuario'];
        $email = $_POST['email_usuario'];
        $senha = $_POST['senha_usuario'];
        $telefone = $_POST['telefone_usuario'];
        $sexo = $_POST['sexo_usuario'];
        $data_nasc = $_POST['data_nascimento_usuario'];
        $cidade = $_POST['cidade_usuario'];
        $estado = $_POST['estado_usuario'];
        $endereco = $_POST['endereco_usuario'];
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome_usuario, email_usuario, senha_usuario, telefone_usuario, sexo_usuario, data_nascimento_usuario, cidade_usuario, estado_usuario, endereco_usuario) 
                                            values ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco' )");
    }
?>
<form id='formulario'>
	<input type='hidden' name='email' value="<?php echo $email?>">
	<input type='hidden' name='senha' value="<?php echo $senha?>">
</form>

<script language='JavaScript'>
	document.forms[0].method = 'POST';
	document.forms[0].action = 'autenticacao.php';
	document.forms[0].submit();
</script>
