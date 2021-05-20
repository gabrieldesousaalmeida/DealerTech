<?php 
    session_start();
	include_once("conexao.php");
	$email = $_SESSION['usuarioEmail'];
    $nome = $_SESSION['usuarioNome'];
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php	
			//Inicio Enviar e-mail
			$to = "sagaveiculosdeluxo@gmail.com";
            $subject = "Mensagem de ".$nome;
            $headers = "From: sagaveiculosdeluxo@gmail.com\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = '<html><body style="background-color: #808080;">';
            $message .= '<center><h1>De '.$email.' para Saga Veiculos de Luxo<br>';
            $message .= '<h2>'.$mensagem.'</h2><br>';
			if(mail($to,$subject,$message,$headers)){
                $_SESSION['mensagem'] = "ok";
                $_SESSION['mensagem_cont'] = "Mensagem Enviada com Sucesso!";
                header("Location: http://localhost/DealerTech/contatos.php");
			}
		?>	
	</body>
</html>