<?php
session_start();
include_once("conexao.php");

$qtde_linhas1 = filter_input(INPUT_POST, 'linhas', FILTER_SANITIZE_STRING);
$qtde_linhas = intval($qtde_linhas1);
$_SESSION['linhas'] = $qtde_linhas;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Entrada de Veículos </title>
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
    <style>
    #lado{
        display: inline-block;
    }
    .fila{
        background-color:white;
        border-radius: 10px;
        width:800px;
	    height:120px;
    }
    .fila2{
        background-color:white;
        border-radius: 10px;
        width:600px;
	    height:60px;
    }
    </style>
    <style type="text/css">
		.carregando{
			color:#ff0000;
			display:none;
		}
	</style>
</head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <form class="login100-form validate-form" method="POST" action="http://localhost/DealerTech/php/estoque/salvar_entrada.php">
                <?php
                    $i = 1;
                    while ($i <= $qtde_linhas) {
                    ?>
                    <div class="fila" style="margin-left:-250px; margin-top:40px;">

                        <div style="display: inline-block;">
                            <div class="wrap-input100 validate-input m-b-16" style="width: 300px;margin-top:25px;margin-left:90px;" data-validate = "Digite o Modelo">
                                <select class="input100" name="id_sub_categoria<?php echo $i;?>" id="id_sub_categoria<?php echo $i;?>" style="color: gray; outline: none; border: none;">
                                    <option selected="selected" class="Country" style="display:none;">Modelo</option>
                                    <?php            
                                    $result_usuarios1 = "SELECT * FROM veiculos WHERE marca='Chevrolet'";
                                    $resultado_usuarios1 = mysqli_query($conn, $result_usuarios1);
                                    while($rows_cursos1 = mysqli_fetch_assoc($resultado_usuarios1)){
                                    ?>
                                        <option value="<?php echo $rows_cursos1['modelo'];?>"><?php echo $rows_cursos1['modelo']?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        
                        <div style="display: inline-block;">
                            <div class="wrap-input100 validate-input m-b-16" style="width: 300px; margin-top:25px;margin-left:40px;" data-validate = "Digite o Modelo">
                                <input class="input100" type="number" name="qtde<?php echo $i;?>" placeholder="Quantidade">
                                <span class="focus-input100"></span>
                            </div>
                        </div>
                    </div>    
                    <?php 
                        $i++;  
                    }
                    ?>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" type="submit">
                                ENVIAR
                            </button>
                        </div>
                        
                        <div class="text-center p-t-136" style="margin-top:-120px;">
                            <a class='txt2' href='http://localhost/DealerTech/admin/estoque.php' style="color:white;">
                                Voltar a página anterior
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                            </a>
                        </div>
                </form>
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