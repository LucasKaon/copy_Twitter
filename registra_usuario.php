<?php 

	//trazendo para cá os dados da db_class
	require_once('db_class.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	echo $usuario ."<br>". $email ."<br>". $senha;

	$objDb = new db();
	$link = $objDb->conecta_mysql();	//recebendo o retorno da conexão com o banco de dados

	//depois de criar a tabela...

	$sql = "insert into usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha')";

	//execuar a query criada

	//mysqli_query(conexao, $sql);
	if(mysqli_query($link, $sql)){
		echo "O Usuário foi registrado com sucesso"; 
	}
	else{
		echo "Ocorreu um erro, e não foi possível registrar o Usuário!";
	}

 ?>