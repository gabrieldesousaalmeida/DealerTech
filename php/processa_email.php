<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php	
			$email = $_POST['email'];
			
			$servidor = "localhost";
			$usuario = "root";
			$senha = "";
			$dbname = "concessionaria";
			
			//Criar a conexao
			$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
			
			$result_leados = "INSERT INTO leados (email) VALUES ('$email')";
			$resultado_leados = mysqli_query($conn, $result_leados);
			
			$leado_id = mysqli_insert_id($conn);
			
			$valor_chave = md5(date('Y-m-d H:i'));
			
			$link = "http://localhost/DealerTech/php/confirmado.php?chave=".$valor_chave;
			
			$result_links_emaos = "INSERT INTO links_emaos (link, leado_id) VALUES ('$valor_chave', '$leado_id')";
			$resultado_links_emaos = mysqli_query($conn, $result_links_emaos);
			
			//Inicio Enviar e-mail
			$to = $email;
            $subject = "Confirmação do Email";
            $headers = "From: ".$email."\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = '<html><body style="background-color: #808080;">';
            $message .= '<center><h1>Saga Veiculos de Luxo<br>';
            $message .= '<a href='.$link.'>Clique aqui para confirmar seu e-mail</a><br> <br>';
			if(mail($to,$subject,$message,$headers)){
					
			}
		?>
	</body>
</html>