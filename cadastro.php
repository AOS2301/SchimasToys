
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>schimas_toys</title> 
    <link rel="stylesheet" href="css/estiloCadLog.css">
</head>
<body>
    <?php require_once "conexao.php";	 // Inclui o arquivo de conexão 
	?>
    <form action="cadastroUser.php" method="POST">
    <h1> Seja bem vindo a Schimas Toys, faça seu cadastro em nosso site!</h1>
        <input type="text"  name="nome_usuario" placeholder="Digite o nome dasdasdasdo usuario..." required>
        <br>
        <input type="text"  name="email_usuario" placeholder="Digite o email do usuario..." required>
        <br>
        <input type="text"  name="senha_usuario" placeholder="Digite a senha do usuario..." required>
        <br>
        <input type="text"  name="telefone_usuario" placeholder="Digite o telefone do usuario..." required>
        <br>
        <input type="radio"  name="sexo_usuario" value="Masulino">
        <br>
        <input type="radio"  name="sexo_usuario" value="Feminino">
        <br>
        <input type="date"  name="data_nascimento_usuario" >
        <br>
        <input type="text"  name="cidade_usuario" placeholder="Digite a cidade do usuario...">
        <br>
        <input type="text"  name="estado_usuario" placeholder="Digite o estado do usuario...">
        <br>
        <input type="text"  name="endereco_usuario" placeholder="Digite o endereco do usuario...">
        <br>
        <input type="submit" name="submit"> 
    </form>
    
</body>
</html>