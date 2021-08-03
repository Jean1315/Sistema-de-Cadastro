function telaLogin(){
	window.location.href = 'formLogin.php';
}

function verificar(){
	var email = $('#email').val();
	var senha = $('#senha').val();
	var acao  = $('#acao') .val();
	
	/*console.log(email);
	console.log(senha);
	console.log(acao);*/
	
	
	$.ajax({
		type:"POST",
		url:"control/controlLogin.php",
		data:{email:email, senha:senha, acao:"logar"},	
		
		success: function(data){
			console.log(data);
			if(data>=1){
				console.log("teste");
				window.location.href = 'formPrincipal.php';
			}else{
				console.log("teste01");
				alert ("Dados Incorretos")
				window.location.href = 'formLogin.php';
			}
		}
	})
}
