<?php
session_start();
include_once("conexao.php");

$evento_cod = $_SESSION['venda'];
$_SESSION['venda1'] = $evento_cod;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Marcar Reunião </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="http://localhost/DealerTech/js/jquery-1.3.2-vsdoc2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
                
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                    <?php
                    if(isset($_SESSION['compra_confirm'])){
                        $red="a";
                        if(isset($_SESSION['compra_confirm'])){
                            $red = $_SESSION['compra_confirm'];
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
                            $_SESSION['compra_confirm']
                        );
                        ?>
                <div class="wrap-login100 align-items-center">
                        <div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="meuModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Pedido de Negociação enviado</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Aguarde a nossa reunião, e qualquer coisa, entre em contato pela página "Fale Conosco".<br>
                                Faça download do evento para marcar no seu calendário!
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary" onclick="location.href='https://google.com';">Salvar Evento</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <span class="login100-form-title">
                            Pedido de Compra Realizado
                        </span>
                        <div class="container-login100-form-btn">
                        <?php echo "<a href='$compra'>";?>
                                <button class="login100-form-btn" type="submit">
                                    Retornar
                                </button>
                            </a>    
                        </div>
                </div> 
                    <?php
                    }else{
                    ?>
                   
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="http://localhost/DealerTech/Imagens/img-01.png" alt="IMG">
                    </div>
                    <form class="login100-form validate-form" style="margin-top: -150px;" method="POST" action="comprar_evento_criar.php">
                        <span class="login100-form-title">
                            Marcar Reunião:
                        </span>

                        <div class="wrap-input100 validate-input">
                            Requisitos:
                            <div class="col-sm">
                                <div class="input100"></div>
                            </div>
                        </div>

                        <div class="wrap-input100 validate-input">
                            Data e hora da Reunião
                            <div class="col-sm">
                                <input type="text" name="start" class="input100" id="start" value="10/02/2021 00:00:00" onkeypress="DataHora(event, this)">
                            </div>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit" name="CadEvent" id="CadEvent" value="CadEvent">
                                ENVIAR
                            </button>
                        </div>

				    </form>
                    <?php
                    }
                    ?>
			    </div>
		    </div>
	    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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