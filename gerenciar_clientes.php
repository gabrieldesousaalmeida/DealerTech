<?php
session_start();
include_once("php/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Gerenciar Clientes</title>	
		<link rel="stylesheet" type="text/css" href="css/cliente.css" media="screen">
		<link href="css/unemstyle.css" rel="stylesheet">
	</head>
	<body style="background-color: white;">
		<div class="menu">
			<ul>
				<li> <a href="#" style="color: red;">........... </a></li> <!--Programação Orientada a Gambiarra-->
				<li> <a href="#" style="background: #fff; color: red; border-radius: 10px;"> <i class="fas fa-home"> </i> Home </a></li>
				<li> <a href="C:\Users\Geílson\Desktop\Sistema Pineaple Tech\Comprar.html"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
				<li> <a href="#"> <i class="fas fa-car"></i> Carros </a></li>
				<li> <a href="#"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
				<li> <a href="#"> <i class="fas fa-clipboard"></i> Sobre Nós </a></li>
			</ul>
		</div>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
		<br>
		<h1>GERENCIAR CLIENTES</h1>
		<div class="bloco">
			<div id="posição" class="bloco1">
				<h3>Barra de Busca</h3>
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
				$qnt_result_pg = 4;
				
				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
				
				$result_usuarios = "SELECT * FROM clientes LIMIT $inicio, $qnt_result_pg";
				$resultado_usuarios = mysqli_query($conn, $result_usuarios);
				while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
				?>	
				<div id="card_cliente">
					<div id="card_info">	
						<?php
							echo "<b>ID:</b> " . $row_usuario['id'] . "<br>";
							echo "<b>Nome:</b> " . $row_usuario['nome'] . "<br>";
							echo "<b>E-mail:</b> " . $row_usuario['email'] . "<br>";
						?>	
					</div>
					
					<div id="card_info" class="card_button">
						<button>
							<a href="#">ALTERAR</a>
						</button>
						<BR><BR>
						<button>
							<a href="#">DELETAR</a>
						</button>		
					</div>
				</div>
				<?php
				}
				?>
				<br><br>
				<?php
				//Paginação - Somar a quantidade de usuários
				$result_pg = "SELECT COUNT(id) AS num_result FROM clientes";
				$resultado_pg = mysqli_query($conn, $result_pg);
				$row_pg = mysqli_fetch_assoc($resultado_pg);
				//echo $row_pg['num_result'];
				//Quantidade de pagina 
				$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
				
				//Limitar os link antes depois
				$max_links = 2;
				echo "<a href='listar.php?pagina=1'>Primeira</a> ";
				
				for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
					if($pag_ant >= 1){
						echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a> ";
					}
				}
					
				echo "$pagina ";
				
				for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
					if($pag_dep <= $quantidade_pg){
						echo "<a href='listar.php?pagina=$pag_dep'>$pag_dep</a> ";
					}
				}
				
				echo "<a href='listar.php?pagina=$quantidade_pg'>Ultima</a>";
				
				?>
			</center>	
				<a href="http://localhost/DealerTech/cadastro.php" style="text-decoration:none">
					<div id="mais" class="circulo">
						<b><h>+</h></b>
					</div>
				</a>	
			</div>	
		</div>					
	</body>
</html>