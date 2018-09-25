<?php 


	require_once('db_class.php');

	$sql = "Select * from usuarios" ;

	$objDb = new db();
	$link = $objDb->conecta_mysql();	//recebendo o retorno da conexão com o banco de dados

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){	//este teste está relacionado com a execução correta , ainda não faz nenhuma validação 
		$dados_usuario = array();

		while ($linha = mysqli_fetch_array($resultado_id, MYSQLI_NUM)){ //ou MYSQLI_ASSOC, faz referência ao nome e não ao ID) 
			$dados_usuario[] = $linha;
		}

		foreach ($dados_usuario as $usuario) {
			var_dump($usuario['2']);
			echo "<br><br>";
		}
	}
	else{
		echo "Erro na execução.";
	}
		
	
 ?>	}
