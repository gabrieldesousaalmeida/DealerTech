<?php
session_start();
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>
        <title>Carros Novos</title>        
        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="http://localhost/DealerTech/css/styles.css" rel="stylesheet" />
        <link href="http://localhost/DealerTech/css/unemstyle2.css" rel="stylesheet">
        <!--bot css-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--bot css-->
<!--bot js-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!--bot js-->
<!--Tag Responsiva-->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!--Tag Responsiva-->

        <style>
          .botao3 a {  
        font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;	     
        text-decoration: none;
        text-align:center;	
        color: rgb(180, 180, 180);
        width: 100px;  
        height: 38px;	
        display:block;
        font-size: 25px;
        border-radius: 5px;    
        background-color: gray;
        border: 1px solid rgb(102, 102, 102);
        } 
        .botao3 a:hover { 
            border: 1px solid red;
            background-color: #800000;
            color:red;
            transition: 0.3s;
            text-shadow: black 1px;
            display:block;
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
        #centro{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }
        .divimage{
            background-image: url(http://localhost/DealerTech/Imagens/gg.png);
            height: 648px;    
        }
        .botao2  {    
            
        }
        .botao2 a {  
        font: bold 12px/24px 'Times New Roman', Times, serif;	
        
        text-decoration: none;
        text-align:center;	
        color: rgb(117, 117, 117);
        width: 100px;  
        height: 55px;	
        display:block;
        font-size: 15px;
        border-radius: 5px;    
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        filter: gray;
        
	    } 
        .botao2 a:hover { 
            
            transition: 0.3s;
            color:#fff;    
            -webkit-filter: grayscale(0%);
            filter: grayscale(0%);
            filter: gray;
            display:block;        
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
h6{
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  color: #fff;
  font-size: 25px;
  margin-top: center;
}
h1{
    
    font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
    font-size: 25px;
    margin-left: 10px;
}
.btnmarca{
    border: 1px solid gray;
    border-radius: 7px;
    width: 100px;
    text-align: center;
    color: white;
}
.opicoes{
  outline: none;
  background: transparent;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  border: none;
  font-size: 20px;
}

input[type=checkbox] {
  position: relative;
  cursor: pointer;
}

input[type=checkbox]:before {
  content: "";
  display: block;
  position: absolute;
  width: 20px;
  height: 20px;
  top: 0;
  left: 0;
  background-color:#bb0000;
  border-radius: 2px;
}

input[type=checkbox]:checked:after {
  content: "";
  display: block;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  position: absolute;
  top: 5px;
  left: 9px;
}
span{
  margin: 0px 15px;
}

.preco{
  outline: none;
  background: rgb(209, 209, 209);
  border: 1px solid gray;
  border-radius: 5px;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  color: gray;
  width:100px;
  margin-left: 19px;
}
        </style>
        
    </head>	
    <body style="background-color: #fff;">
        <?php
        if(isset($_SESSON['usuarioNiveisAcessoId'])){
            $tipo = $_SESSION['usuarioNiveisAcessoId'];
        }else{
            $tipo="";
        }
		    ?>	 
        
      <!-- Navigation-->
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="box-shadow: gray 0px 3px 9px; background-color: white;;">
            <div class="container px-4 px-lg-5">
                 <img src="http://localhost/DealerTech/imagens/logored.png" style="height: 60px;"/>
                <a class="navbar-brand" href="#page-top" style="color:red;">Saga Veículos de Luxo</a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/comprar.php"><i class="fas fa-caret-right"></i> Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/carros.php">Carros</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/contatos.php">Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: red;" href="http://localhost/DealerTech/sobre.php">Sobre Nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      <br><br><br>

      <!--Conteúdo-->
			<center>		
				<?php
				//Receber o número da página
				$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
				
				//Setar a quantidade de itens por pagina
				$qnt_result_pg = 6;
				
				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

        //Bando de dados
				$result_usuarios = "SELECT * FROM veiculos WHERE qm>1 LIMIT $inicio, $qnt_result_pg";
				$resultado_usuarios = mysqli_query($conn, $result_usuarios);
				while($rows_cursos = mysqli_fetch_assoc($resultado_usuarios)){
				  $categoria_id = $rows_cursos['modelo'];
          $result_categorias = "SELECT * FROM imagens WHERE nome = '$categoria_id'";
          $resultado_categorias = mysqli_query($conn, $result_categorias);
          while ($rows_categorias = mysqli_fetch_array($resultado_categorias)) {            
          ?>
            <div class="car">
                <h2> <?php echo $rows_cursos['modelo'];?></h2> 
                <h4> <?php echo $rows_cursos['versao'];?> </h4>
                <br> 
                <?php echo "<img src='http://localhost/DealerTech/veiculos/".$rows_cursos['marca']."/".$rows_cursos['modelo']."/".$rows_categorias['imagem']."' style='height: 130px;'>";?> 
                <h5> R$ <?php echo $rows_cursos['preço'];?><br><p style="color: gray; font-size: 20px;"> <?php echo $rows_cursos['qm'];?>Km - Ano: <?php echo $rows_cursos['ano'];?></p></h5>
                <?php echo "<img src='http://localhost/DealerTech/Imagens/Marcas/".$rows_cursos['marca'].".png"."' style='height: 60px;'>";?>
                        
                <p class="botao" id="centro" style="margin-top:20px">
                <?php echo "<a href='http://localhost/DealerTech/veiculos/".$rows_cursos['marca']."/".$rows_cursos['modelo']."/".$rows_cursos['modelo'].".php"."'style='font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;'><br> <b> <i class='fas fa-eye'></i> Ver Carro </a>";?>       
                </p>
              </div>		
				<?php
          }
				}
				?>
				<br>
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
				?>
        <nav aria-label="Page navigation example" style="margin-left:600px;">
                    <ul class="pagination">
                        <li class="page-item" >
                        <a class="page-link" href="carros.php?pagina=1" aria-label="Previous" style="background-color:red; color:white;">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                        </li>
                        <?php
                        for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
                            if($pag_ant >= 1){
                                echo "<li class='page-item'><a class='page-link' href='carros.php?pagina=$pag_ant'>$pag_ant</a></li> ";
                            }
                        }
                        ?>
                        <li class="page-item"><a class="page-link" href="" style='color:red;'><?php echo "$pagina ";?></a></li>
                        <?php
                        for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
                            if($pag_dep <= $quantidade_pg){
                                echo "<li class='page-item'><a class='page-link' href='carros.php?pagina=$pag_dep'>$pag_dep</a></li> ";
                            }
                        }
                        ?>
                        <li class="page-item">
                        <a class="page-link" href='<?php echo "carros.php?pagina=".$quantidade_pg; ?>' aria-label="Next" style="background-color:red; color:white;">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                        </li>
                    </ul>
                </nav>
			</center>

    <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
    </body>	
</html>

