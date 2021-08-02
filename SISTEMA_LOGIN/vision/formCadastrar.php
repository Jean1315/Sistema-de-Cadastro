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
<title>Cadastrar Clientes</title>
	<body background="../imagens/fundo.jpg" bgproperties="fixed"></body>
	<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/clienteJS.js"></script>
	<script src="../js/loginJS.js"></script>
</head>
	
<?php 
include("../control/controlCliente.php");
include("../control/controlCidade.php");
include("../control/controlSexo.php");
	
$aluno_obj_resultado = new BuscarEnderecos();
$arraylistarCidade   = $aluno_obj_resultado->Cidade();

$aluno_obj_resultado = new BuscarEnderecos();
$arraylistarEstado   = $aluno_obj_resultado->Estado();
	
$aluno_obj_resultado = new BuscarEnderecos();
$arraylistarPais     = $aluno_obj_resultado->Pais();
	
$aluno_obj_resultado = new Sexo();
$arraylistarSexo     = $aluno_obj_resultado->Sexo();
?>
	
<body>
	<div class="formCadastrar">
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
	
	<div class = "cadastros">
		<br><br>
		<b>Nome:&nbsp;</b><input type="text" placeholder = "Digite o nome do aluno" id = "nome">
		<b>Idade</b>&nbsp;<input type="number" id="idade">
		
		<b>Cidade</b>
		<select name="cidade" id="cidade">
		<?php
				foreach($arraylistarCidade as $values){
		?>
			  <option value="<?php echo $values['idMunicipio']?>"><?php echo $values['descricaoMunicipio']?></option>
			<?php
				}
			?>	
		</select>
		
		<b>Estado:</b>
			<select name="estado" id="estado">
			<?php
				foreach($arraylistarEstado as $values){
			?>
			  <option value="<?php echo $values['idEstado']?>"><?php echo $values['descricaoEstado']?></option>
			<?php
				}
			?>
			</select>
		
		<b>Pais:</b>
			<select name="pais" id="pais">
			<?php
				foreach($arraylistarPais as $values){
			?>
			  <option value="<?php echo $values['idPais']?>"><?php echo $values['descricaoPais']?></option>
			<?php
				}
			?>
		</select>
		
		<b>Sexo:</b>
			<select name="sexo" id="sexo">
			<?php
				foreach($arraylistarSexo as $values){
			?>
			 	<option value="<?php echo $values['idSexo']?>"><?php echo $values['descricaoSexo']?></option>
			<?php
				}
			?>
		</select>
					
		<input type="button" id="insere" value="Gravar" onClick="insere();">
		<input type="hidden" name="acao" value="insere">

	</div>

</body>
</html>