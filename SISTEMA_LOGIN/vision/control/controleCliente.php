<?php
	include("../../control/controlCliente.php");

	$idAluno      = @$_POST["idAluno"];
	$nomeAluno    = @$_POST["nome"];
	$idadeAluno   = @$_POST["idade"];
	$idMunicipio  = @$_POST['cidade'];
	$idEstado     = @$_POST['estado'];
	$idPais       = @$_POST['pais'];
	$idSexo       = @$_POST["sexo"];
		
	$acao         = @$_POST["acao"];

	$insere_obj = new Cliente();

	if($acao == "insere"){
		$result = $insere_obj->insere($nomeAluno,$idadeAluno,$idMunicipio,$idEstado,$idPais,$idSexo);
		echo $result;
	}

	else if($acao == "deletar"){
		$result = $insere_obj->deletar($idAluno);
	}

	else if($acao == "alterar"){
		$result = $insere_obj->alterar($idAluno,$nomeAluno,$idadeAluno,$idMunicipio,$idEstado,$idPais,$idSexo);
		echo $result;
	}

?>