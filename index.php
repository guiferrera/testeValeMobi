<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="css/style-page.css" rel="stylesheet" />
  <link href="css/bootstrap.css" rel="stylesheet" />    
  <title>Negociação de Mercadorias</title>
</head>

<body>
	<header class="container">
		<h1>Trading of Goods</h1>
	</header>
	
	<section class="container">
		<div class="painel">
		
		<form action="autentica.php" method="POST">
        	<h4>Login </h4>
        	<input type="text" name="login" id="login" size="50"><br />
    
    		<h4>Senha </h4>
    		<input type="password" name="senha" id="senha" size="50"><br />
    
    		<input type="submit" value="Logar" name="logar" id="logar">
    		
		</form>
		<h4><a href="cadastro.php">Cadastre-se</a></h4>		

		</div>
	</section>	

	<footer>
		<h5>Sistema de Negociação de Mercadorias - By Guilherme Ferreira</h5>
	</footer>
</body>
</html>