<?php

	require_once( $_SERVER['DOCUMENT_ROOT']."../model/conexaoBD.php");///caminho fisico da pasta, pois se ficar voltando ../../ uma irá ser perder is dados

class Login{
	public function verificar($email,$senha){
		$obj_con = new conexaoBD();
		$conectar = $obj_con->con();
		
		$sql = "SELECT * FROM login WHERE login = '".$email."' AND senha = '".$senha."'";
		
		$result = mysqli_query($conectar,$sql) or die (mysqli_error($conectar));;
		$linha  = mysqli_num_rows($result);
		
		return $linha;
	}
}

?>