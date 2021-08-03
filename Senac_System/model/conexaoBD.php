<?php
	class conexaoBD{
		function con(){
			$conectar = mysqli_connect("localhost","root","") or die(mysqli_error());
			mysqli_select_db($conectar,"cadastro_aluno") or die(mysqli_error());
			
			return $conectar;
		}
	}
?>