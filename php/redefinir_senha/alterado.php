<?php
session_start();
include_once("conexao.php");

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$email = $_SESSION['email1'];

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE clientes SET senha='$senha', modified=NOW() WHERE email='$email'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

?>
<html>
    <head>
    <title>Alteração da Senha</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="http://localhost/DealerTech/css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <?php
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
                <?php
                if(mysqli_affected_rows($conn)){
                    echo "Sua senha foi alterada com sucesso!";
                }else{
                    echo "senha não foi alterada com sucesso";
                }
                ?>
			</div>
			<div class="modal-footer">
                <button type="button" onclick="window.location.href='http://localhost/DealerTech/index.php'" class="btn2" data-dismiss="modal">Página Inicial</button>     
			</div>
			</div>
		</div>
		</div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>    
