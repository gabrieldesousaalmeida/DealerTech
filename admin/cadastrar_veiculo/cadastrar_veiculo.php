<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastrar Veículo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--ÍCONE-->	
	<link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
	<link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
				<form class="login100-form validate-form flex-sb flex-w" name="dados" method="POST" action="http://localhost/DealerTech/php/cadastro_veiculo/salva_mensagem.php" style="width: 850px;">				
					<span class="login100-form-title p-b-51" style="margin-top: -30px;">
						Cadastrar Veículo
					</span>
				<div style="display: inline-block;">	
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Modelo" style="width: 400px;">
						<select class="input100" name="marca" style="color: gray; outline: none; border: none;">
							<option selected="selected" class="Country" style="display:none;">Marca</option>
							<option value="Ferrari"> Ferrari </option>
							<option value="Chevrolet"> Chevrolet</option>
							<option value="Mercedes"> Mercedes</option>
							<option value="BMW"> BMW </option>
							<option value="Lamborghini"> Lamborghini</option>
							<option value="Porsche"> Porsche</option>
						</select>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Modelo">
						<input class="input100" type="text" name="modelo" placeholder="Modelo">
						<span class="focus-input100"></span>
					</div>
				
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite a versão">
						<input class="input100" type="text" name="versao" placeholder="Versão">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Modelo">
						<select class="input100" name="cor" style="color: gray; outline: none; border: none;">
							<option selected="selected" class="Country" style="display:none;">Cor</option>
							<option value="valor1" style="background-color: blue;"> Azul </option>
							<option value="valor2" style="background-color: red; "> Vermelho</option>
							<option value="valor3" style="background-color: yellow;"> Amarelo</option>
							<option value="valor4" style="background-color: green;"> Verde </option>
							<option value="valor4" type="text"> Outro </option>
						</select>
					</div>

					<script>
						function changeValue(event) {
							event.value = addCommas(event.value.replace(/\D/g, ''));
							calculate();
						}

						function addCommas(value) {
								return value.replace(/\B(?=(\d{2})+(?!\d))/g, '.');
						}

					</script>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite a versão">
						<input class="input100" type="text" name="preço" placeholder="Preço" onkeyup="changeValue(this)"/>
						<span class="focus-input100"></span>
					</div>
				</div>
				<div style="display: inline-block;">
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Motor" style="width: 400px;">
						<input class="input100" type="text" name="motor" placeholder="Motor">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Ano">
						<input class="input100" type="text" style="color: gray;" name="ano" placeholder="Ano">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Ano">
						<input class="input100" type="number" style="color: gray;" name="qm" placeholder="Quilometragem">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Modelo">
						<select class="input100" name="blindagem" style="color: gray; outline: none; border: none;">
							<option selected="selected" class="Country" style="display:none;">Blindagem</option>
							<option value="Sim"> Sim </option>
							<option value="Não"> Não</option>
						</select>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Digite o Modelo" >
						<select class="input100" name="cambio" style="color: gray; outline: none; border: none;">
							<option selected="selected" class="Country" style="display:none;">Câmbio</option>
							<option value="Manual"> Manual</option>
							<option value="Automático"> Automático</option>
						</select>
					</div>
				</div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif; font-size: 40px; margin-top: 20px;" type="submit">
							Cadastrar     <i class="fas fa-pencil-alt"></i> 
						</button>
					</div>
				</form>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<?php
	$red="a";
	if(isset($_SESSION['mensagem1'])){
		$red = $_SESSION['mensagem1'];
		
	}else{
		$red="";
	}
	if($red == "ok"){ ?>
	<script>
		$(document).ready(function(){
			$('#meuModal').modal('show');
		});
	</script>
	<?php 
	} 
	unset(
		$_SESSION['mensagem1']
	);
	?>
	<!-- Modal 2 -->
	<div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Informações e Imagens Enviados</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			Veículo Cadastrado com Sucesso!
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
		</div>
		</div>
	</div>
	</div>	
	<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="js/main.js"></script>
	<!--===============================================================================================-->
		<script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>

	<!--Bootstrap-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
	<!--/Bootstrap-->
</body>
</html>