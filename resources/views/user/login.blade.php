<html>
	<head>
		<meta charset="utf-8">
		<title>{{$title}}</title>
		<link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
		<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
	</head>
	<body>
		<div class="background"><h1>Gerenciamento rápido e inteligente </h1></div>

		<section id="conteudo-view" class="login">
			
			<h1>InvestidorL</h1>
			<h3>O nosso gerenciador de investimento<h3>

			<form action="/login" method="post">
			{{ csrf_field() }}
			<p>Acesse o sistema</p>

			<label><input type="text" name="username" placeholder="Usuário" class="input"></label>
			<label><input type="password" name="password" placeholder="Senha" class="input"></label>
			<input type="submit" value="Entrar">


			</form> 
			
		</section>


		   
		
	</body>
</html>