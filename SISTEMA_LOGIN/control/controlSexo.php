<?php

require_once($_SERVER['DOCUMENT_ROOT']."/model/conexaoBD.php");

class Sexo{
	function Sexo(){
		$obj_con  = new conexaoBD();
		$conectar = $obj_con->con();
		
		$sql = "SELECT * FROM sexo";
		$result = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($result)){
			$linha[$r]['idSexo']         = $dados['idSexo'];
			$linha[$r]['descricaoSexo']  = $dados['descricaoSexo'];
			$r++;
			
		}
			return $linha;
	}
}
?>