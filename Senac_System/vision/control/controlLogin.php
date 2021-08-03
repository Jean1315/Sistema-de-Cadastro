<?php
	include("../../control/controlCliente.php");
	include("../../control/LoginControl.php");


	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$acao  = $_POST["acao"];

	$obj_cliente = new Cliente();
	$obj_login   = new Login();


	if($acao == "logar"){
		$result = $obj_login->verificar($email,$senha);	
	}

	if($result >= 1){
		session_start(); ///Abrir sessão
		$_SESSION['email'] = $email;
		$_SESSION['result'] = $result;
	}

	echo $result;
	
?>