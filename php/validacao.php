<?php
	session_start();
	$sql = new mysqli("sql102.epizy.com","epiz_31749696","Lbc46xTP9grFC6","epiz_31749696_pez");
	$acessar = filter_input(INPUT_POST, 'acessar', FILTER_SANITIZE_STRING);
	
	if($acessar) {
		$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
		
		
		if((!empty($usuario)) AND ((!empty($senha)))) {
			$resul_usuario = "select * from usuarios where usuario = '$usuario' limit 1";
			$resultado_usuario = mysqli_query($sql, $resul_usuario);
			

			if ($resultado_usuario) {
				$row_usuario = mysqli_fetch_assoc($resultado_usuario);
				
				if(password_verify($senha, $row_usuario['senha'])) {
					$_SESSION['codigo'] = $row_usuario['codigo'];
					$_SESSION['nome'] = $row_usuario['nome'];
					$_SESSION['email'] = $row_usuario['email'];
					header("Location:../html/principal.html");
        
				} else {
					$_SESSION['msg'] = "<text>Senha incorreta.</text>";
					header("Location:../index.php");
				}	

			} else {
				$_SESSION['msg'] = "<text>Usuário incorreto.</text>";
				header("Location:../index.php");
			}

		} else {
			$_SESSION['msg'] = "<text>Página não encontrada.</text>";

		}
	}
?>