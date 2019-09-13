<?php
	include "conn.php";
	require "class.usuarios.php";
	session_start();

	$nome = $_POST['CadNome'];
	$email = $_POST['CadEmail'];
	$senha = sha1($_POST['CadSenha']);
	$csenha = sha1($_POST['CadCSenha']);

	$novoUsuario = new Usuario();

	if($nome === '' || $email === ''){
		echo json_encode("erro1");
	}

	elseif($_POST['CadSenha'] === '' || $_POST['CadCSenha'] === ''){
		echo json_encode("erro1");
	}

	else if($senha != $csenha){
		echo json_encode("erro2");
	}

	else if($novoUsuario->setVerificarCadastro($pdo, $email) > 0){
		echo json_encode("erro3");
	}

	else if(strlen($senha) < 8){
		echo json_encode("erro4");
	}


	else{
		$novoUsuario->setCadastro($pdo, $nome, $email, $senha);
		echo json_encode("ok");
	}
?>

