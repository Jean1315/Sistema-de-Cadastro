<?php

require_once($_SERVER['DOCUMENT_ROOT']."/model/conexaoBD.php");

class BuscarEnderecos{
	function Cidade(){
		$obj_con  = new conexaoBD();
		$conectar = $obj_con->con();
		
		$sql = "SELECT * FROM municipio";
		$result = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($result)){
			$linha[$r]['idMunicipio']         = $dados['idMunicipio'];
			$linha[$r]['descricaoMunicipio']  = $dados['descricaoMunicipio'];
			$r++;
			
		}
			return $linha;
	}
	
	function Estado(){
		$obj_con  = new conexaoBD();
		$conectar = $obj_con->con();
		
		$sql = "SELECT * FROM estado";
		$result = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($result)){
			$linha[$r]['idEstado']       = $dados['idEstado'];
			$linha[$r]['descricaoEstado'] = $dados['descricaoEstado'];
			$r++;			
		}
			return $linha;
	}
	
	function Pais(){
		$obj_con  = new conexaoBD();
		$conectar = $obj_con->con();
		
		$sql = "SELECT * FROM pais";
		$result = mysqli_query($conectar,$sql) or die (mysqli_error());
		$r = 0;
		
		while($dados = mysqli_fetch_assoc($result)){
			$linha[$r]['idPais'] = $dados['idPais'];
			$linha[$r]['descricaoPais'] = $dados['descricaoPais'];
			$r++;
		}
		return $linha;
	}
}

?>