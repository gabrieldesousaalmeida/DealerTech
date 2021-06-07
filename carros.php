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
        #centro{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }
        .divimage{
            background-image: url(http://localhost/DealerTech/Imagens/gg.png);
            height: 648px;    
        }
        .botao a {  
        font: bold 12px/24px 'Times New Roman', Times, serif;	
        text-decoration: none;
        text-align:center;	
        color: rgb(117, 117, 117);
        background: rgb(185, 185, 185);
        width: 300px;  
        height: 70px;	
        display:block;
        font-size: 17px;
        border-radius: 5px;      
	    } 
        .botao a:hover { 
            background: #ca0b0b;
            transition: 0.5s;
            color:#fff;    
            display:block;        
}
        body{
    margin: 0;
    padding: 0;
    justify-content: center;
    align-items: center; 
    background: lavender;
    }
ul{
    margin: 0;
    padding: 0;
    display: flex;
}
ul li{
    list-style: none;
    margin: 0 20px;
    transition: 2s;
}
ul li a {
    display: block;
    position: relative;
    text-decoration: none;
    padding: 5px;
    font-size: 13px;
    font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
    color: #fff;
    text-transform: uppercase;
    transition: .5s;
}
ls{
    display: block;
    position: relative;
    text-decoration: none;
    padding: 5px;
    font-size: 20px;
    font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
    color: #fff;

}
ul:hover li a{
    transform: scale(1.0);
    opacity: .5;
    filter: blur(1px);
}

ul li a:hover{
    transform: scale(1.3);
    opacity: 1;
    filter: blur(0);
}
.menu{  
    float: right;
    width:100%;
    height: 35px;
    
}
/*DIV CAR*/
.car{
  background: linear-gradient(#f5f5f5, #f5f5f5 ,#f5f5f5);
  margin-top: 50px;
  border-radius: 4px;
  height: 470px;
  width: 350px;
  margin-left: 20px;
  text-align: center;
  border:solid 1px rgb(185, 185, 185);
  display: inline-block;
}
h2{
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  text-transform: uppercase;
  color:black;

}
h4{
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  color: gray;
  font-size: 15px;
}
h5{
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  color: black;
  font-size: 25px;
  margin-top: 10px;
  margin-top: center;
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
                        <a class="nav-link" href="http://localhost/DealerTech/login.php" title="Fazer Login" style="font-size: 10px;"> <i class="fas fa-user-edit"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/cadastro.php" title="Fazer Cadastro" style="font-size: 10px;"><i class="fas fa-cog"></i></a>
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
                    $categoria_id = $rows_cursos['modelo'];
                    $result_categorias = "SELECT * FROM imagens WHERE nome = '$categoria_id'";
                    $resultado_categorias = mysqli_query($conn, $result_categorias);
                    while ($rows_categorias = mysqli_fetch_array($resultado_categorias)) {     
                        
                ?>
                    <div class="car">
                        <h2> <?php echo $rows_cursos['modelo'];?></h2> 
                        <h4> xdrive40i m sport </h4>
                        <br> 
                        <?php echo "<img src='http://localhost/DealerTech/veiculos/".$rows_cursos['marca']."/".$rows_cursos['modelo']."/".$rows_categorias['imagem']."' style='height: 130px;'>";?> 
                        <h5> R$ 662.950 <br><p style="color: gray; font-size: 20px;"> 0Km - Ano: 2020</p></h5>
                        <img src="Imagens/bmwx6/logo.png" style="height: 60px;"/>
                        
                        <p class="botao" id="centro" style="margin-top:20px">
                        <?php echo "<a href='http://localhost/DealerTech/veiculos/".$rows_cursos['marca']."/".$rows_cursos['modelo']."/".$rows_cursos['modelo'].".php"."'style='font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;'><br> <b> <i class='fas fa-eye'></i> Ver Carro </a>";?>       
                        </p>
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
			</div>
			<!--Bootstrap-->
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>						
	</body>
</html>