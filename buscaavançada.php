<?php
session_start();
include_once("php/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>
        <title>Carros</title>        
        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
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
        
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #800000;">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/index.php" style="background-color: #fff; border-radius:5px; color: #800000;"> <i class="fas fa-home"> </i> Home <span class="sr-only">(current)</span> </a>
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
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/sobre.php"> <i class="fas fa-question-circle"></i></i> Ajuda</a>
                </li>
              </ul>
              <img src="Imagens/logof2.jpg" style="height: 40px;border-radius: 10px;">
              <form class="form-inline my-2 my-lg-0">
              </form>
            </div>
          </nav>
    </div> <br> 
    <!--Filtragem-->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent" >
          <div class="" style="background-color: #d9d9d9;">
            <form method="POST" action="">
              <h1 style="color: black;"> Escolha a Marca: </h1>
              <!--DIV MARCAS-->
              <div class="abraço" style="display: flex; text-align: left;">
                <p class="botao2" id="centro">      
                  <a href="#" title="BMW"><img src="Imagens/bmwx6/logo.png" height="80px" style="margin-top: 5px;"> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a href="#" title="Chevrolet"><img src="https://logosmarcas.net/wp-content/uploads/2021/04/Chevrolet-Logo.png" height="80px" style="margin-top: 5px;"> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a href="#" title="Lamburguine"><img src="https://logosmarcas.net/wp-content/uploads/2021/04/Lamborghini-Logo.png" height="80px" style="margin-top: 5px;"> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a href="#" title="Ferrari"><img src="https://logodownload.org/wp-content/uploads/2017/05/ferrari-logo-8.png" height="80px" style="margin-top: 5px;"> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a href="#" title="Mercedes"><img src="https://promocaoreunidas.com.br/themes/lp-reunidas-veiculos-homolog/assets/images/mercedes-benz-logo.png" height="80px" style="margin-top: 5px;"> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a href="#" title="Porsche"><img src="https://logosmarcas.net/wp-content/uploads/2021/04/Porsche-Logo.png" height="80px" style="margin-top: 5px;"> </a>       
                </p>
                
                <br> <br> <br> <br> <br>
              </div class="abraço">  
              <!--FIM: DIV MARCAS-->

              <!--MODELO FILT-->
              <h1 style="color: black;"> Selecione o modelo: </h1>
              <select class="opicoes" name="modelo" style="margin-top: 10px; margin-left: 20px;">
                <option value="valor1">xdrive40i m sport </option>
                <option value="valor2" selected> xdrive40i m sport 2</option>
                <option value="valor3"> xdrive40i m sport 3 s</option>
              </select> <br> <br>
              <!--/MODELO FILT-->
              
              <!--Qui FILT-->
              <h1>Quilometragem: </h1>
              <input class="checkbox" type="checkbox" name="Novo" id="Novo" style="margin-left: 20px;">
              <label for="Novo" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Novo</label>
              <br>
              <input class="checkbox" type="checkbox" name="Usado" id="Usado" style="margin-left: 20px;">
              <label for="Usado" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Usado</label>
              <!--/Qui FILT-->

              <!--Preço FILT-->
              <h1> Preço: </h1> <input class="preco" type="number" placeholder="Mínimo">
              <input class="preco" type="number" placeholder="Máximo"> <br> <br>
              <!--/Preço FILT-->

              <!--Ano FILT-->
              <h1> Ano: </h1> <input class="preco" type="number" placeholder="Mínimo">
              <input class="preco" type="number" placeholder="Máximo"> <br> <br>
              <!--/Ano FILT-->

              <!--Blindagem FILT-->
              <h1>Blindagem: </h1>
              <input class="checkbox" type="checkbox" name="Novo" id="Novo" style="margin-left: 20px;">
              <label for="Novo" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Sim</label>
              <br>
              <input class="checkbox" type="checkbox" name="Usado" id="Usado" style="margin-left: 20px;">
              <label for="Usado" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Não</label>       
              <!--/Blindagem FILT-->
              <br><br>
              <!--Filtrar FILT-->
              <p class="botao3" id="centro" style="margin-left:15px;">      
                  <a href="#"> Filtrar </a>       
              </p>
              <!--/Filtrar FILT-->
              
            </form>
            <img src="Imagens/cavaloba.png" style="margin-left: 600px; margin-top: -450px">
           
          </div>
        </div>
        <nav class="navbar navbar-dark" style="background-color: #bb0000;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="outline: none;">
            <span class="navbar-toggler-icon"></span>
            <h4 style="color:#fff;"> Filtros dos Veículos</h4>
          </button>
          
          <img src="https://www.maschi.com.br/assets/userfiles/archives/5c94db4b65627.png" height="70px">
          
        </nav>
      </div>
      <!--Fim Filtragem-->

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

				//Receber dados da filtragem
				$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
				$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
        $quilo = filter_input(INPUT_POST, 'quilo', FILTER_SANITIZE_STRING);
        $preço = filter_input(INPUT_POST, 'preço', FILTER_SANITIZE_STRING);
        $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
        $blindagem = filter_input(INPUT_POST, 'blindagem', FILTER_SANITIZE_STRING);

        //Bando de dados
				$result_usuarios = "SELECT * FROM veiculos WHERE marca LIKE '%$marca%' AND modelo LIKE '%$modelo%' LIMIT $inicio, $qnt_result_pg";
				$resultado_usuarios = mysqli_query($conn, $result_usuarios);
				while($rows_cursos = mysqli_fetch_assoc($resultado_usuarios)){
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
				echo "<a href='gerenciar_clientes.php?pagina=1'>Primeira</a> ";
				
				for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
					if($pag_ant >= 1){
						echo "<a href='gerenciar_clientes.php?pagina=$pag_ant'>$pag_ant</a> ";
					}
				}
					
				echo "$pagina ";
				
				for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
					if($pag_dep <= $quantidade_pg){
						echo "<a href='gerenciar_clientes.php?pagina=$pag_dep'>$pag_dep</a> ";
					}
				}
				
				echo "<a href='gerenciar_clientes.php?pagina=$quantidade_pg'>Ultima</a>";
				
				?>
			</center>

    <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
    </body>	
</html>

