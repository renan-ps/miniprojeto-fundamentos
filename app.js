var cadastrarUsuario = document.getElementById('cadastrarUsuario');
var loginUsuario = document.getElementById('loginUsuario')

cadastrarUsuario.addEventListener('submit', function(e){
	e.preventDefault();

	var dados = new FormData(cadastrarUsuario)

	console.log(dados);
	console.log(dados.get('CadNome'));
	console.log(dados.get('CadEmail'));
	console.log(dados.get('CadSenha'));
	console.log(dados.get('CadCSenha'));

	fetch('cadastrar.php', {
		method: 'POST',
		body: dados
	})

	.then( res => res.json())
	.then( data => {
		console.log(data)
		if(data === 'erro1'){
			alertify.error('Preencha todos os campos.');
		}else if(data === 'erro2'){
			alertify.error('As senha não combinam.');
		}
		else if(data === 'erro3'){
			alertify.error('E-mail já cadastrado.');
		}
		else if(data === 'erro4'){
			alertify.error('Preencha a senha com ao menos 8 caracteres.');
		}

		else{
			alertify.success('Cadastro realizado com sucesso. Por favor, faça login.')
		}
		
	})
});

loginUsuario.addEventListener('submit', function(e){
	e.preventDefault();

	var dados = new FormData(loginUsuario)

	console.log(dados);
	console.log(dados.get('LogEmail'));
	console.log(dados.get('LogSenha'));

	fetch('logar.php', {
		method: 'POST',
		body: dados
	})
	.then( res => res.json())
	.then( data => {
		console.log(data)
		if(data === 'erro1'){
			alertify.error('Preencha todos os campos.');
		}else{
			alertify.success('Logado com sucesso.');
			setTimeout(function() {
    		window.location.href = "index.php";
			}, 1500);
		}
		
	})
});