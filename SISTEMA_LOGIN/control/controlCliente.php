<?php
/// Carregar Modelo - Iniciar 
	include_once($_SERVER['DOCUMENT_ROOT']."/model/conexaoBD.php");
/// Carregar Modelo - Fim

	class Cliente{
		function verificar(){
			$obj_con = new conexaoBD();
			$conectar = $obj_con->con();
			
			$sql = ("SELECT * FROM cadastro_aluno WHERE login = '".$email."' AND senha = '".$senha."'");
			
			$result = mysqli_query($conectar,$sql) or die ($result = "false");
		}
		
		function insere($nome,$idade,$idMunicipio,$idEstado,$idPais,$idSexo){
				
			$obj_con  = new conexaoBD();	
			$conectar = $obj_con->con();

			$sql = "INSERT INTO aluno (nomeAluno, idadeAluno, idMunicipio, idEstado, idPais, idSexo) VALUES ('".$nome."','".$idade."','".$idMunicipio."','".$idEstado."','".$idPais."','".$idSexo."');";
			
			mysqli_query($conectar,$sql);
			
		}
		
		function busca($idAluno = false){
			$obj_con = new ConexaoBD();
			$conectar = $obj_con->con();

			$sql = "SELECT * FROM aluno ";
			
				if($idAluno > 0){
					$sql .="WHERE idAluno = ".$idAluno;
				}

			$resultado = mysqli_query($conectar,$sql);
					$r=0;
			while($dados = mysqli_fetch_assoc($resultado)){
					$linha[$r]['idAluno']    = $dados['idAluno'];
					$linha[$r]['nomeAluno']  = $dados['nomeAluno'];
					$linha[$r]['idadeAluno'] = $dados['idadeAluno'];
					$linha[$r]['idMunicipio'] = $dados['idMunicipio'];
					$linha[$r]['idEstado'] = $dados['idEstado'];
					$linha[$r]['idPais'] = $dados['idPais'];
					$linha[$r]['idSexo'] = $dados['idSexo'];

					$r++;
				}

			return $linha;
		}
		
		function deletar($idAluno){
			$result = true;
			
			$obj_con = new ConexaoBD();
			$conectar = $obj_con->con();
			
			$slqDelete = 
			"DELETE FROM aluno WHERE idAluno =".$idAluno;
			mysqli_query($conectar,$slqDelete) or die ($result = false);			
		}
		
		function alterar($idAluno,$aluno,$idade,$idMunicipio,$idEstado,$idPais,$idSexo){
			$result = true;
			
			$obj_con     = new ConexaoBD();
			$conectar	 = $obj_con->con();
			
		$sqlUpdate = "UPDATE aluno SET idAluno= '".$idAluno."',nomeAluno='".$aluno."',idadeAluno='".$idade."',idMunicipio='".$idMunicipio."',idEstado='".$idEstado."',idPais='".$idPais."',idSexo='".$idSexo."' WHERE idAluno = ".$idAluno;
			
			mysqli_query($conectar,$sqlUpdate) or die ($result = false);		
			//return $sqlUpdate;
		}
	}
?>