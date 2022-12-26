<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="Index">
    <link rel="shortcut icon" href="imagens/cidade_icon.png">

    <link rel="stylesheet" type="text/css" href="css/forms.css">

    <title>Piltover e Zaun</title>
</head>

<body>

<img src="imagens/runeterra_icon.png">

<main class="Caixinha">

<div class="Login">

	<h2 class="text-center">Logar</h2>

	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);			
		}
		if(isset($_SESSION['msgcad'])){
			echo $_SESSION['msgcad'];
			unset($_SESSION['msgcad']);
		}
	?>

	<form type="text" action="php/validacao.php" method="post">

		<fieldset>

        <div class="escrever">
		<input type="text" name="usuario" placeholder="Digite o seu usuario">
        <div class="Linha"></div>
        </div>

        <div class="escrever">
		<input type="password" name="senha" placeholder="Digite o sua senha">
        <div class="Linha"></div>
        </div>
    
		<input type="submit" name="acessar" value="Acessar">

        <br></br>

		<h2>Você ainda não possui uma conta?</h2>

		<a href="php/cadastro.php">Clique aqui cadastre-se</a>

		</fieldset>
	</form>
    </main>
</div>
</body>
</html>

