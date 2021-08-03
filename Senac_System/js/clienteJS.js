function formPrincipal(){
	window.location.href = 'formPrincipal.php'
}

function formListar(){
	window.location.href = 'formListar.php'
}

function formCadastrar(){
	window.location.href = 'formCadastrar.php'
}

function formEditar(valor){
	
	$('#idFormulario').val(valor);
	$('#formulario').submit();
}

function formPesquisa(){
	window.location.href = 'formPesquisa.php'
}

function insere(){
	acao   = $('#acao').val();
	nome   = $('#nome').val();
	idade  = $('#idade').val();
	cidade = $('#cidade').val();
	estado = $('#estado').val();
	pais   = $('#pais').val();
	sexo   = $('#sexo').val();
 	
	$.ajax({
		type:"POST",
		url:"control/controleCliente.php",
		data:{acao:"insere",nome:nome,idade:idade,cidade:cidade,estado:estado,pais:pais,sexo:sexo},
		
		success: function(data){
			console.log(data);
			alert("Aluno Cadastrado Com Sucesso!")
		}
		
	})
}
	
function deletar(valor){
	var result = confirm("Você tem certeza?");
	
		if(result == true){
			$.ajax({
				type:"POST",
				url:"control/controleCliente.php",
				data:{acao:"deletar",idAluno:valor},
				
			success: function(data){
					console.log("Deletado");			
					window.location.href = 'formListar.php';
					alert("Aluno Deletado!");
				}
			});
		}else{
			alert("Registro	nao deletado!");
		}
	}

function update(valor){
	var acao   = $('#acao').val();
	var idAluno= $('#idAluno').val();
	var nome   = $('#nome').val();
	var idade  = $('#idade').val();
	var cidade = $('#cidade').val();
	var estado = $('#estado').val();
	var pais   = $('#pais').val();
	var sexo   = $('#sexo').val();

	$.ajax({
		type: "POST",
		url: "control/controleCliente.php",
		data:{acao:"alterar",idAluno:idAluno,nome:nome,idade:idade,cidade:cidade,estado:estado,pais:pais,sexo:sexo},
		
		success: function(data){
			console.log(data);
			alert("Cadastro Atualizado!");
			window.location.href = 'formListar.php';

		}		
	});
}