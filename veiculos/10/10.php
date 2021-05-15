<?php
session_start();
include_once("conexao.php");

$id= basename($_SERVER['PHP_SELF'],'.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
    <meta charset="utf-8">
		<title>Todos os Carros</title>	
		<script type="text/javascript" src="http://localhost/DealerTech/js/validform.js"></script>
		<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/css/veiculo.css" media="screen">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/css/divflut.css" media="screen">
		<link href="http://localhost/DealerTech/css/unemstyle.css" rel="stylesheet">
	</head>
	<body style="background-color: white;">
		<div class="menu">
			<ul>
				<li> <a href="#" style="color: rgba(117, 2, 2, 0);">........... </a></li> <!--Programação Orientada a Gambiarra-->
				<li> <a href="#" style="background: #fff; color: red; border-radius: 10px;"> <i class="fas fa-home"> </i> Home </a></li>
				<li> <a href="C:\Users\Geílson\Desktop\Sistema Pineaple Tech\Comprar.html"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
				<li> <a href="#"> <i class="fas fa-car"></i> Carros </a></li>
				<li> <a href="#"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
				<li> <a href="#"> <i class="fas fa-clipboard"></i> Sobre Nós </a></li>
			</ul>
		</div>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
		<br>
		<h2>CARROS</h2>
		<div class="bloco">
			<div id=posição class="bloco">
			<center>		
				<?php
                $result_cursos = "SELECT * FROM veiculos WHERE id='$id'";
                $resultado_cursos = mysqli_query($conn, $result_cursos);
				while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) { 
                    echo $rows_cursos['modelo']."<br>";
                    echo $rows_cursos['id']."<br>";
                    $categoria_id = $rows_cursos['id'];
                
                    $result_categorias = "SELECT * FROM imagens WHERE id = '$categoria_id'";
                    $resultado_categorias = mysqli_query($conn, $result_categorias);
                    while ($rows_categorias = mysqli_fetch_array($resultado_categorias)) { 
                        echo $rows_categorias['nome']."<br><hr>";   
                        echo "<img class='img'src='http://localhost/DealerTech/veiculos/".$rows_categorias['id']."/".$rows_categorias['imagem']."'>";
                    }
                }
				?>
				<br><br>
			</center>
				<a href="#" style="text-decoration:none" onclick="window.print();" class="circulo1" id="mais" title="Imprimir">
					<center><img src="http://localhost/DealerTech/Imagens/imprimir.png" height="35"; width="35"; id="imprimir" style="margin-top:7%;"></center>
				</a>	
			</div>	
		</div>					
	</body>
</html>