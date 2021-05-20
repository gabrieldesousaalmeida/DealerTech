<?php 
    session_start();
	include_once("conexao.php");
	$email = filter_input(INPUT_POST, 'email_senha', FILTER_SANITIZE_EMAIL);
	$result_usuario = "SELECT * FROM clientes WHERE email = '$email'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);

	$_SESSION['email1'] = $row_usuario['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Redefinição de Senha</title>
		<link rel="stylesheet" href="http://localhost/DealerTech/css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<?php	
			$link = "http://localhost/DealerTech/php/redefinir_senha/redefinir.php?id=". $row_usuario['id'] ."";
			
			//Inicio Enviar e-mail
			$to = $email;
            $subject = "Redenição de Senha";
            $headers = "From: ".$email."\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = '<html><body style="background-color: #808080;">';
            $message .= '<center><h1>Saga Veiculos de Luxo<br>';
            $message .= '<a href='.$link.'>Clique aqui para mudar senha</a><br> <br>';
			if(mail($to,$subject,$message,$headers)){
					
			}
		$sim ="sim";
		if($sim =="sim"){ ?>
			<script>
				$(document).ready(function(){
					$('#exampleModal').modal('show');
				});
			</script>
			<?php 
        } 
		?>	

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Redefinir Senha</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
                Email de redefinição enviado com sucesso. Consulte a caixa de entrada dos seus emails por favor.
			</div>
			<div class="modal-footer">
                <a href="http://localhost/DealerTech/index.php">
				    <button type="button" class="btn2" data-dismiss="modal">Página Inicial</button>
                </a>    
			</div>
			</div>
		</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
	</body>
</html>