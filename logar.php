<?php
	include "conn.php";
	require "class.usuarios.php";
	session_start();

	$email = $_POST['LogEmail'];
	$senha = sha1($_POST['LogSenha']);

	$usuario = new Usuario();
	$usuario->setLogin($pdo, $email, $senha);

	if($email === '' || $senha === ''){
		echo json_encode("erro1");
	}
	else if($usuario->getLogado() == true){
		$_SESSION['idUsuario'] = $usuario->getidUsuario();
		$_SESSION['nome'] = $usuario->getNome();
		$_SESSION['email'] = $usuario->getEmail();
		$_SESSION['logado'] = true;
		echo json_encode("ok");
	}

	else{
		echo json_encode("ok");
	}
?>

