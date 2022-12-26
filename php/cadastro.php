<?php
session_start();
ob_start();
//Verifica se botao cadastrar foi selecionado
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);

if($btnCadUsuario){
	$sql = new mysqli("sql102.epizy.com","epiz_31749696","Richmandark147","epiz_31749696_pez");
	$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	
	$erro = false;
	
	$dados_st = array_map('strip_tags', $dados_rc);
	$dados = array_map('trim', $dados_st);
	
	if(in_array('',$dados)){
		$erro = true;
		$_SESSION['msg'] = "Necessário preencher todos os campos";

	}elseif((strlen($dados['senha'])) < 6){
		$erro = true;
		$_SESSION['msg'] = "A senha deve ter no minímo 6 caracteres";

	}elseif(stristr($dados['senha'], "&")) {
		$erro = true;
		$_SESSION['msg'] = "Caracter ( & ) utilizado na senha é inválido";

	}else{
		$result_usuario = "SELECT codigo FROM usuarios WHERE usuario='". $dados['usuario'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este usuário já está sendo utilizado";
		}
		
		$result_usuario = "SELECT codigo FROM usuarios WHERE email='". $dados['email'] ."'";
		$resultado_usuario = mysqli_query($sql, $result_usuario);
		if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
			$erro = true;
			$_SESSION['msg'] = "Este e-mail já está cadastrado";
		}
	}
	
	
	//var_dump($dados);
	if(!$erro){
		//var_dump($dados);
		$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
		
		$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
						'" .$dados['nome']. "',
						'" .$dados['email']. "',
						'" .$dados['usuario']. "',
						'" .$dados['senha']. "'
						)";
		$resultado_usario = mysqli_query($sql, $result_usuario);
		if(mysqli_insert_id($sql)){
			$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
			header("Location: ../index.php");
		}else{
			$_SESSION['msg'] = "Erro ao cadastrar o usuário";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="Index">
    <link rel="shortcut icon" href="imagens/cidade_icon.png">

    <link rel="stylesheet" type="text/css" href="../css/forms.css">

    <title>Piltover e Zaun</title>
</head>
	<body>

		<main class="Caixinha">

			<forms>

				<h2>Cadastrar Usuário</h2>

				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
				?>
				<form method="POST" action="">

                    <fieldset>
                        <div class="escrever">
                        <input type="text" name="nome" placeholder="Digite o nome e o sobrenome" class="form-control">
                        <div class="Linha"></div>
                        </div>
                        
                     

                        <div class="escrever">
                        <input type="text" name="email" placeholder="Digite o seu e-mail" class="form-control">
                        <div class="Linha"></div>
                        </div>

                        <br></br>

                        <div class="escrever">
                        <input type="text" name="usuario" placeholder="Digite o usuário" class="form-control">
                        <div class="Linha"></div>
                        </div>
                        
                        <br></br>

                        <div class="escrever">
                        <input type="password" name="senha" placeholder="Digite a senha" class="form-control">
                        <div class="Linha"></div>
                        </div>

                        <br></br>

                        <input type="submit" name="btnCadUsuario" value="Cadastrar" class="button">
                        
                        <br></br>
                        

                        <div id= "bt_logar"> 
                            <a href="../index.php">Logar</a> 
                        </div>
                </fieldset>
			</form>

			
        </main>
		
	</body>
</html>