<?php
session_start();
	if((!isset ($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
	unset($_SESSION['email']);
	unset($_SESSION['result']);
		
	header('location:../index.php');
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pesquisa</title>
	<body background="../imagens/fundo.jpg" bgproperties="fixed"></body>
	<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/clienteJS.js"></script>
	<script src="../js/loginJS.js"></script>
</head>

<body>
	<div class="formEditar">
		<fieldset style="border-color:#000000">
			<div class="formButton" style="text-align: center">
				<input type="button" value="HOME" onClick="formPrincipal()"></input>
				<input type="button" value="Listar" onClick="formListar()"></input>
				<input type="button" value="Cadastrar" onClick="formCadastrar()"></input>
				<input type="button" value="Editar" onClick="formPesquisa()"></input>
				<input type="button" value="Sair" onClick="telaLogin()"></input>
			</div>
		</fieldset>
	</div>

	<div class="estilo">
		<h1 style="text-align: center">Editar Cadastro</h1>		
	</div>
	
	<div id="divBusca">
	  <b>Pesquisar Aluno: </b><input type="text" id="txtBusca" placeholder="Buscar..." style="width: 300px;"/>
	</div>
	
</body>
</html>