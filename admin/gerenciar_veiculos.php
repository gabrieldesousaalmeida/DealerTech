<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Gerenciar Veículos</title>	
		<script type="text/javascript" src="http://localhost/DealerTech/js/validform.js"></script>
		<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/css/veiculo_geren.css" media="screen">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="http://localhost/DealerTech/css/divflut.css" media="screen">
		<link href="http://localhost/DealerTech/css/unemstyle.css" rel="stylesheet">
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
		@media screen and (min-width: 1305px) {
			.bloco1{
				background-color: rgba(228, 161, 161, 0.349);
				border-radius: 30px;
				width: 38%;
				height: 600px;
				margin-left: 1%;
				font-size: 18px;
			}
		}
        </style>
	</head>
	<body style="background-color: white;">
	<?php
        if(isset($_SESSION['usuarioNiveisAcessoId'])){
            $tipo = $_SESSION['usuarioNiveisAcessoId'];
        }else{
            $tipo="";
        }
	?>
	<div class="menu">
        <ul class=>
            <li> <a href="#" style="color: rgba(117, 2, 2, 0);"> </a></li> <!--Programação Orientada a Gambiarra-->
            <li> <a href="http://localhost/DealerTech/index.php" title="Página Inicial"> <i class="fas fa-home"> </i> Home </a></li>
            <li> <a href="http://localhost/DealerTech/comprar.php" title="Compre o seu carro de luxo"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
            <li> <a href="http://localhost/DealerTech/carros.php" style="background: #fff; color:rgb(117, 2, 2); border-radius: 3px;" title="Conheça os veículos de luxo"> <i class="fas fa-car"></i> Carros </a></li>
            <li> <a href="http://localhost/DealerTech/contatos.php" title="Entre em Contato Conosco"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
            <li> <a href="http://localhost/DealerTech/sobre.php" title="Conheça a Empresa Saga Veículos de Luxo"> <i class="fas fa-clipboard"></i> Sobre Nós </a></li>
			<?php
			if($tipo=="cliente"){
			?>		
				<li id="centro2" class="sair1"><a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-sign-out-alt"></i></a></li>	
			<?php
			}else if($tipo=="admin"){
			?>	
				<li id="centro2" class="oa"> <a href="http://localhost/DealerTech/admin/admin.php" title="Opções Administrativas" style="font-size: 22px; margin-top: 0px;"> <i class="fas fa-tools"></i> </a> </li>
                <li id="centro2" class="sair"><a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-sign-out-alt"></i></a></li>	
			<?php	
			}else{
			?>
				<li id="centro2" class="oa"> <a href="http://localhost/DealerTech/login.php" title="Fazer Login" style="font-size: 22px; margin-top: 0px;"> <i class="fas fa-user-edit"></i></a></li>
                <li id="centro2" class="sair"><a href="http://localhost/DealerTech/cadastro.php" title="Fazer Cadastro" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-cog"></i></a></li>	
			<?php
			}
			?>
		</ul>
    </div>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
		<br>
		<h2>GERENCIAR VEÍCULOS</h2>
		<div class="bloco">
			<div id="posição" class="bloco1">
				<h1>Pesquisar Veículo</h1>
			
				<form method="POST" action="">
				<label>Marca: </label>
				<input type="text" name="marca" placeholder="Digite o nome"><br><br>
				<label>Modelo: </label>
				<input type="text" name="modelo" placeholder="Digite o email"><br><br>
				<label>Chassi: </label>
				<input type="text" name="chassi" placeholder="Digite o email"><br><br>

				<input name="SendPesqUser" type="submit" value="Pesquisar">
			</form><br><br>

			</div>	
			<div id=posição class="bloco2">
			<center>		
				<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				
				//Receber o número da página
				$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
				
				//Setar a quantidade de itens por pagina
				$qnt_result_pg = 2;
				
				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
				
				$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
				$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
				$chassi = filter_input(INPUT_POST, 'chassi', FILTER_SANITIZE_STRING);
				$result_cursos = "SELECT * FROM veiculos WHERE marca LIKE '%$marca%' AND modelo LIKE '%$modelo%' AND chassi LIKE '%$chassi%' LIMIT $inicio, $qnt_result_pg";
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
						<button title="Alterar Veículo">
						<?php
							echo "<a style='text-decoration: none'; href='http://localhost/DealerTech/php/alterar_veiculo/edit_veiculo.php?id=". $rows_categorias['id'] ."'>ALTERAR</a>";
						?>	
						</button>
						<BR><BR>
						<button onclick="return deletar_veiculo()" title="Deletar Veículo">
						<?php	
							echo "<a style='text-decoration: none'; href='http://localhost/DealerTech/php/deletar_veiculo/proc_apagar_veiculo.php?id=" . $rows_categorias['id'] . "'>DELETAR</a>";
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
				echo "<a href='gerenciar_veiculos.php?pagina=1'>Primeira</a> ";
				
				for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
					if($pag_ant >= 1){
						echo "<a href='gerenciar_veiculos.php?pagina=$pag_ant'>$pag_ant</a> ";
					}
				}
					
				echo "$pagina ";
				
				for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
					if($pag_dep <= $quantidade_pg){
						echo "<a href='gerenciar_veiculos.php?pagina=$pag_dep'>$pag_dep</a> ";
					}
				}
				
				echo "<a href='gerenciar_veiculos.php?pagina=$quantidade_pg'>Ultima</a>";
				
				?>
			</center>
				<a href="#" style="text-decoration:none" onclick="window.print();" class="circulo1" id="mais" title="Imprimir">
					<center><img src="http://localhost/DealerTech/Imagens/imprimir.png" height="35"; width="35"; id="imprimir" style="margin-top:7%;"></center>
				</a>
				<a href="http://localhost/DealerTech/admin/Cadastrar_veículo.php" target="_blank" style="text-decoration:none"class="circulo2" id="mais" title="Adicionar Usuário">		
					<b><h>+</h></b>
				</a>	
			</div>	
		</div>					
	</body>
</html>