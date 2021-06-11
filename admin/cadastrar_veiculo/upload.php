<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<style>
		.lado{
			display: inline-block;
		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
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
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
				<form class="login100-form validate-form flex-sb flex-w" name="dados" method="POST" action="http://localhost/DealerTech/php/cadastro_veiculo/processa_img.php" enctype="multipart/form-data" style="width: 1000px;">
					<span class="login100-form-title p-b-51" style="margin-top: 0px;">
						Upload de Imagens
					</span>
					
						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 1" style="margin-top: -35px; height:70px;">
							Imagem Principal:<input class="input100" type="file" name="arquivo1" placeholder="Marca">
							<span class="focus-input100"></span>
						</div>
					<div style="display: inline-block;">	
						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 1" style="height:80px;">
							Imagem da Lupa pequena:<input class="input100" type="file" name="arquivo2" placeholder="Marca">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 1" style="height:80px;">
							Imagem da Lupa grande:<input class="input100" type="file" name="arquivo9" placeholder="Marca">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 1" style="height:80px;">
							Imagem Slide 1:<input class="input100" type="file" name="arquivo3" placeholder="Marca">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 2" style="height:80px;">
							Imagem Slide 2:<input class="input100" type="file" name="arquivo4" placeholder="Modelo">
							<span class="focus-input100"></span>
						</div>
					</div>
					<div style="display: inline-block;">
						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 3" style="height:80px;">
							Imagem Slide 3<input class="input100" type="file" name="arquivo5" placeholder="Versão">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 4" style="height:80px;">
							Imagem Slide 4:<input class="input100" type="file" name="arquivo6" placeholder="Cor">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 5" style="height:80px;">
							Imagem Slide 5:<input class="input100" type="file" name="arquivo7" placeholder="Motor">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-16" data-validate = "Imagem Slide 6" style="height:80px;">
							Imagem Slide 6:<input class="input100" type="file" name="arquivo8" placeholder="Ano">
							<span class="focus-input100"></span>
						</div>
					</div>
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif; font-size: 40px;" type="submit">
								Enviar    <i class="fas fa-pencil-alt"></i> 
							</button>
						</div>

				</form>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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

</body>
</html>