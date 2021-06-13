<?php
session_start();
include_once("conexao.php");

$modelo= basename($_SERVER['PHP_SELF'],'_compra.php');
$compra = $modelo.".php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Comprar Carro </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="http://localhost/DealerTech/Imagens/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/lib/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/lib/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/lib/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/lib/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/lib/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/css/main.css">
<!--===============================================================================================-->
</head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="http://localhost/DealerTech/Imagens/img-01.png" alt="IMG">
                    </div>

                    <form class="login100-form validate-form" style="margin-top: -150px;">
                        <span class="login100-form-title">
                            Para a compra, insira os seguintes dados:
                        </span>
                        <div class="wrap-input100 validate-input" data-validate = "Insira seu nome">
                            <input class="input100" type="text" name="" placeholder="Nome">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fas fa-user"></i>
                            </span>
                        </div>
                        
                        <div class="wrap-input100 validate-input" data-validate = "Insira seu E-mail">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Insira sua senha">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Insira seu número ">
                            <input class="input100" type="text" name="" placeholder="Número de Telefone">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fas fa-phone-alt"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate = "Insira seu CPF">
                            <input class="input100" type="text" name="" placeholder="Número de CPF">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fas fa-id-card"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                ENVIAR
                            </button>
                        </div>

                        <div class="text-center p-t-12">
                            <span class="txt1" style="font-size: 17px;">
                            <?php
                                $result_cursos = "SELECT * FROM veiculos WHERE modelo='$modelo'";
                                $resultado_cursos = mysqli_query($conn, $result_cursos);
        
				                while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) { 
                                    echo $rows_cursos['marca']." ".$rows_cursos['modelo']." ".$rows_cursos['versao'];
                                }
                            ?>
                            </span>
                            <a class="txt2" href="#">

                            </a>
                        </div>

                        <div class="text-center p-t-136" style="margin-top:-100px;">
                            <?php echo "<a class='txt2' href='$compra'>";?>
                                Voltar a página anterior
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
				    </form>
			    </div>
		    </div>
	    </div>
	
        <!--===============================================================================================-->	
            <script src="http://localhost/DealerTech/lib/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
            <script src="http://localhost/DealerTech/lib/vendor/bootstrap/js/popper.js"></script>
            <script src="http://localhost/DealerTech/lib/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
            <script src="http://localhost/DealerTech/lib/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
            <script src="http://localhost/DealerTech/lib/vendor/tilt/tilt.jquery.min.js"></script>
            <script >
                $('.js-tilt').tilt({
                    scale: 1.1
                })
            </script>
        <!--===============================================================================================-->
            <script src="http://localhost/DealerTech/js/main.js"></script>
        <!--===============================================================================================-->
            <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
    </body>
</html>