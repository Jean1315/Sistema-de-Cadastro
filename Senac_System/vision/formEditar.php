<?php 
include_once("../control/controlCliente.php");
include("../control/controlCidade.php");
include("../control/controlSexo.php");
$idAluno = $_POST['idAluno'];
?>

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
<title>Editar Cadastrar</title>
	<body background="../imagens/fundo.jpg" bgproperties="fixed"></body>
	<script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="../js/loginJS.js"></script>
	<script src="../js/clienteJS.js"></script>
	<?php
	$aluno_obj_resultado = new Cliente();
	$arraylistar = $aluno_obj_resultado->busca($idAluno);
	
	$aluno_obj_resultado = new BuscarEnderecos();
	$arraylistarCidade   = $aluno_obj_resultado->Cidade();

	$aluno_obj_resultado = new BuscarEnderecos();
	$arraylistarEstado   = $aluno_obj_resultado->Estado();

	$aluno_obj_resultado = new BuscarEnderecos();
	$arraylistarPais     = $aluno_obj_resultado->Pais();

	$aluno_obj_resultado = new Sexo();
	$arraylistarSexo     = $aluno_obj_resultado->Sexo();
	?>
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

	<form>
		<br><br>
		<b>Nome:&nbsp;</b><input type="text" placeholder = "Digite o nome do aluno" id = "nome" name="nome" value="<?php echo $arraylistar[0]['nomeAluno']?>">
		
		<b>Idade</b>&nbsp;<input type="number" id="idade" name="idade" value="<?php echo $arraylistar[0]['idadeAluno']?>">
		
		<b>Cidade</b>
		<select name="cidade" id="cidade">
		<?php
				foreach($arraylistarCidade as $values){
		?>
			<option value="<?php echo $values['idMunicipio']?>"<?php echo ($values['idMunicipio'] == $arraylistar[0]['idMunicipio'])? 'selected' : '' ?>><?php echo $values['descricaoMunicipio']?></option>
			<?php
				}
			?>	
		</select>
		
		<b>Estado:</b>
			<select name="estado" id="estado">
			<?php
				foreach($arraylistarEstado as $values){
			?>
			<option value="<?php echo $values['idEstado']?>"<?php echo ($values['idEstado'] == $arraylistar[0]['idEstado'])? 'selected' : '' ?>><?php echo $values['descricaoEstado']?></option>
			<?php
				}
			?>
			</select>
		
		<b>Pais:</b>
			<select name="pais" id="pais">
			<?php
				foreach($arraylistarPais as $values){
			?>
			<option value="<?php echo $values['idPais']?>"<?php echo ($values['idPais'] == $arraylistar[0]['idPais'])? 'selected' : '' ?>><?php echo $values['descricaoPais']?></option>			
			<?php
				}
			?>
		</select>
		
		<b>Sexo:</b>
			<select name="sexo" id="sexo">
			<?php
				foreach($arraylistarSexo as $values){
			?>
			<option value="<?php echo $values['idSexo']?>"<?php echo ($values['idSexo'] == $arraylistar[0]['idSexo'])? 'selected' : '' ?>><?php echo $values['descricaoSexo']?></option>

			<?php
				}
			?>
		</select>
			<input type="hidden" name = "idAluno" id="idAluno" value="<?php echo $arraylistar[0]['idAluno']?>">
			<input type="button" id="inserir" value="Salvar Alterações" onClick="update(27);">
			<input type="hidden" name="acao" value="inserir">
		</form>

</body>
</html>