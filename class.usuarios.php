<?php
	class Usuario { 
		private $idUsuario;
		private $nome;
		private $email;
		private $logado;

		//Cadastrar usuário no banco de dados
		public function setCadastro($pdo, $nome, $email, $senha){
			$stmt = $pdo->prepare('INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)');
			$stmt->bindParam(1, $nome, PDO::PARAM_STR);
			$stmt->bindParam(2, $email, PDO::PARAM_STR);
			$stmt->bindParam(3, $senha, PDO::PARAM_STR);

			//testa o cadastro
			if($stmt->execute()){
				return "Cadastro efetuado com sucesso.";
			}else{
				return "Erro no cadastro.";
			}
		}


		public function setVerificarCadastro($pdo, $email){
		
		$stmt = $pdo->prepare('SELECT * FROM usuarios WHERE email = ?');
		$stmt->bindParam(1, $email, PDO::PARAM_STR);

		$stmt->execute();

		return $stmt->rowCount();
	}

	}

?>