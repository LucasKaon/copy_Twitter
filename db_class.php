<?php 
	
	class db{
		
		//host - endereço onde o mysql está instalado
		private $host = 'localhost';
		//usuario
		private $usuario = 'root';
		//senha
		private $senha = '';
		//banco de dados
		private $database = 'twitter_clone';

		public function conecta_mysql(){

			//criar conexão
			$conexao = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);
			//mysqli_connect(localizao do bd , usuario de acesso, senha, banco de dadoss);

			//ajustar o charset de comunicação entre a aplicação e o banco de dados
			mysqli_set_charset($conexao, 'utf8');

			//verificar se houve erro de conexão com o banco de dados
			if (mysqli_connect_errno()) {
				echo "Erro ao tentar se conectar com o banco de dados: ".mysqli_connect_error();
			}

			return $conexao;
		}


	}



?>