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
            $message = '<html><body>';
            $message .= '<center>
			<div>
				<h2 style="font-size: 30px; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> 
					Para confirmar seu E-mail no site: <br> Saga veículos de Luxo, click no botão abaixo:
				</h2>
			<div class="cent"style="background: rgba(255, 255, 255, 0); height: 350px; width: 900px;border-radius: 15px; margin-top:20px;">
				
				   <a href='.$link.' style="text-decoration: none; color:#fff;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
				   	<button style="background: linear-gradient(rgb(3, 168, 3), rgb(2, 88, 2));color: #fff;width: 370px;height: 28px;border-color: rgb(2, 88, 2);border-radius: 10px;border-width: 2px;font-size: 20px;">Confirmar E-mail</button>
				   </a>
				
			   </div>
			</div>
			</center>
			</body>
			</html>';

			if(mail($to,$subject,$message,$headers)){
					
			}
		?>
	</body>
</html>