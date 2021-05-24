<?php
session_start();
include_once("php/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Carros</title>
		<link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon/favicon-16x16.png">
		<link rel="manifest" href="http://localhost/DealerTech/Imagens/favicon/site.webmanifest">	
		<script type="text/javascript" src="js/validform.js"></script>

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/veiculo.css" media="screen">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<link href="css/unemstyle.css" rel="stylesheet">
		<style>
		#centro{
        	display: inline-block;
        	margin-left: auto;
        	margin-right: auto;
        }
        #centro2{
            display: inline-block;
        }
        .oa{
            margin-left: 24%;
        }
        .sair{
            margin-left: 0%;
        }
		.sair1{
            margin-left: 28%;
        }
		.img{
		width: 350px;
		height: 160px;
		margin-left: 3%;
		}
		</style>
	</head>
	<body style="background-color: white;">
	<div class="menu">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#800000;">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/index.php"> <i class="fas fa-home"> </i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/comprar.php"> <i class="fas fa-dollar-sign"> </i> Comprar</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/carros.php"> <i class="fas fa-car"></i> Carros</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/contatos.php"> <i class="fas fa-phone-alt"></i> Contatos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/sobre.php"> <i class="fas fa-clipboard"></i> Sobre Nós</a>
                </li>
                <li class="nav-item">
                </li>
                <?php
                if(isset($_SESSION['usuarioNiveisAcessoId'])){
                $tipo = $_SESSION['usuarioNiveisAcessoId'];
                }else{
                    $tipo="";
                }
                if($tipo=="cliente"){
                ?>		
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px;"> <i class="fas fa-sign-out-alt"></i></a>
                    </li>	
                <?php
                }else if($tipo=="admin"){
                ?>	
                    <li class="nav-item active"> 
                        <a class="nav-link" href="http://localhost/DealerTech/admin/admin.php" title="Opções Administrativas" style="font-size: 25px;"> <i class="fas fa-tools"></i> </a> 
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px;"><i class="fas fa-sign-out-alt"></i></a>
                    </li>	
                <?php	
                }else{
                ?>
                    <li class="nav-item active"> 
                        <a class="nav-link" href="http://localhost/DealerTech/login.php" title="Fazer Login" style="font-size: 25px;"> <i class="fas fa-user-edit"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/cadastro.php" title="Fazer Cadastro" style="font-size: 25px;"><i class="fas fa-cog"></i></a>
                    </li>	
                <?php
                }
                ?>
              </ul>
              <form class="form-inline my-2 my-lg-0">
              </form>
            </div>
        </nav>
    </div>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
		<br>
		<h2>CARROS</h2>
			<div id=posição class="bloco">
			<center>		
				<?php
                //cáculo pg
                $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
				
				//Setar a quantidade de itens por pagina
				$qnt_result_pg = 3;
				
				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
				$result_cursos = "SELECT * FROM veiculos LIMIT $inicio, $qnt_result_pg";
                $resultado_cursos = mysqli_query($conn, $result_cursos);
                while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) { 
				?>	
				<div id="card_cliente">
					<div id="card_info">	
						<?php
							echo "<b>Marca:</b> " . $rows_cursos['marca'] . "<br>";
							echo "<b>Modelo:</b> " . $rows_cursos['modelo'] . "<br>";
                            $categoria_id = $rows_cursos['id'];
                        ?>
                            <?php
                            $result_categorias = "SELECT * FROM imagens WHERE id = '$categoria_id'";
                            $resultado_categorias = mysqli_query($conn, $result_categorias);
                            while ($rows_categorias = mysqli_fetch_array($resultado_categorias)) {     
                                echo "<img class='img'src='http://localhost/DealerTech/veiculos/".$rows_categorias['id']."/".$rows_categorias['imagem']."'>";
                            ?>
					</div>
                    <div id="card_info" class="card_button">
						<button title="Estou Interessado">
						<?php
							echo "<a style='text-decoration: none'; href='veiculos/".$rows_categorias['id']."/".$rows_categorias['id'].".php'>Estou Interessado</a>";
						?>	
						</button>		
					</div>
				</div>
				<?php
                    }
				}
				?>
				<br><br>
				<?php
				//Paginação - Somar a quantidade de usuários
				$result_pg = "SELECT COUNT(id) AS num_result FROM veiculos";
				$resultado_pg = mysqli_query($conn, $result_pg);
				$row_pg = mysqli_fetch_assoc($resultado_pg);
				//echo $row_pg['num_result'];
				//Quantidade de pagina 
				$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
				
				//Limitar os link antes depois
				$max_links = 3;
				echo "<a href='carros.php?pagina=1'>Primeira</a> ";
				
				for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
					if($pag_ant >= 1){
						echo "<a href='carros.php?pagina=$pag_ant'>$pag_ant</a> ";
					}
				}
					
				echo "$pagina ";
				
				for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
					if($pag_dep <= $quantidade_pg){
						echo "<a href='carros.php?pagina=$pag_dep'>$pag_dep</a> ";
					}
				}
				
				echo "<a href='carros.php?pagina=$quantidade_pg'>Ultima</a>";
				
				?>
			</center>
				<a href="#" style="text-decoration:none" onclick="window.print();" class="circulo1" id="mais" title="Imprimir">
					<center><img src="Imagens/imprimir.png" height="35"; width="35"; id="imprimir" style="margin-top:7%;"></center>
				</a>	
			</div>
			<!--Bootstrap-->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>						
	</body>
</html>