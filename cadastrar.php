<?php
	include "header.php";
	require "class.usuarios.php";

	if(isset($_POST['validador'])){

		$nome = $_POST['inputCadNome'];
		$email = $_POST['inputCadEmail'];
		$senha = sha1($_POST['inputCadSenha']);
		$csenha = sha1($_POST['inputCadCSenha']);

		$novoUsuario = new Usuario();

		if($novoUsuario->setVerificarCadastro($pdo, $email) > 0){
			/* Verifica se o e-mail já está cadastrado */
			echo "<script>console.log('Usuário e/ou e-mail já cadastrado(s).');</script>";
			$_SESSION['msg_erro_cadastro'] = "<p style='color: red;'>Usuário e/ou e-mail já cadastrado(s).</p>";
			//echo "<script> history.go(-1) </script>";
		}

		elseif($senha == "" || $csenha == ""){
			echo "<script>console.log('Preencha as senhas corretamente.');</script>";
			$_SESSION['msg_erro_cadastro'] = "<p style='color: red;'>Preencha as senhas corretamente.</p>";
			//echo "<script> history.go(-1) </script>";
		}

		elseif($senha != $csenha){
			echo "<script>console.log('Preencha as senhas corretamente.');</script>";
			$_SESSION['msg_erro_cadastro'] = "<p style='color: red;'>Preencha as senhas corretamente.</p>";
			//echo "<script> history.go(-1) </script>";
		}

		elseif(strlen($senha) < 8){
			echo "<script>console.log('A senha precisa ter 8 caracteres.');</script>";
			$_SESSION['msg_erro_cadastro'] = "<p style='color: red;'>A senha precisa ter 8 caracteres.</p>";
			//echo "<script> history.go(-1) </script>";
		}

		else{
			$novoUsuario->setCadastro($pdo, $nome, $email, $senha);
			echo "<script>console.log('Usuário cadastrado com sucesso.');</script>";
			$_SESSION['msg_erro_cadastro'] = "<p style='color: green;'>Usuário cadastrado com sucesso.</p>";
			//echo "<script> history.go(-1) </script>";
		}

	}

	else{
	}

	

?>