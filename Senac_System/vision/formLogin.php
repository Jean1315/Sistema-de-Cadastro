<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
	<body background="../imagens/fundo_login.png" bgproperties="fixed"></body>
	<?php 
	//$obj_cliente = new Cliente();
	?>
	
	<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/loginJS.js"></script>	
</head>
<body>
	<form>
		<div class="login" style="text-align: center; color: aliceblue"><br><br>
			<h1 style="text-align: center; color: aliceblue;">Login</h1>
			<b style="text-align: center">E-mail:</b>
				<input type="email" name="login" id ="email" placeholder="Digite seu Email"><br><br>
			<b>Senha:</b>
				<input type="password" name="senha" id="senha"><br><br>
				<input type="hidden" name="acao" id="acao" value="logar">
			
				<input type="button" onClick="verificar();" value="Entrar"/> 
		</div>
	</form>
</body>
</html>