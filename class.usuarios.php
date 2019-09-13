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

		//Verifica se o usuário está cadastro
		public function setVerificarCadastro($pdo, $email){
		$stmt = $pdo->prepare('SELECT email FROM usuarios WHERE email = ?');
		$stmt->bindParam(1, $email, PDO::PARAM_STR);

		$stmt->execute();

		$count = $stmt->rowCount();
		return $count;
		}

		//Faz login
		public function setLogin($pdo, $email, $senha){
			$stmt = $pdo->prepare('SELECT * from usuarios WHERE email = ? and senha = ?');
			$stmt -> bindParam(1, $email, PDO::PARAM_STR);
			$stmt -> bindParam(2, $senha, PDO::PARAM_STR);
			$stmt -> execute();

			if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				$this->setidUsuario($row['idUsuario']);
				$this->setNome($row['nome']);
				$this->setEmail($row['email']);
				$this->setLogado(true);
			}
			else{
				return "erro";
			}
		}

		public function setidUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}
		public function getidUsuario(){
			return $this->idUsuario;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}

		public function setEmail($email){
			$this->email = $email;
		}
		public function getEmail(){
			return $this->email;
		}

		public function setLogado($log){
			$this->logado = $log;
		}
		public function getLogado(){
			return $this->logado;
		}




	}

?>