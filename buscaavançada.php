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
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/unemstyle2.css" rel="stylesheet">
    
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
                 <img src="imagens/logored.png" style="height: 60px;"/>
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
    <br> <br><br><br><br>
    <!--Filtragem-->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent" >
          <div class="" style="background-color: #d9d9d9;">
            <form method="POST" action="">
              
              <br>
              <!--Qui FILT-->
             
              <h1>Quilometragem: </h1>
              <input class="checkbox" type="checkbox" name="quilo" value="Novo" style="margin-left: 20px;">
              <label for="Novo" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Novo</label>
              <br>
              <input class="checkbox" type="checkbox" name="quilo" value="Usado" style="margin-left: 20px;">
              <label for="Usado" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Usado</label>
              <!--/Qui FILT-->

              <!--Preço FILT-->
              <script>
                function changeValue(event) {
                  event.value = addCommas(event.value.replace(/\D/g, ''));
                  calculate();
                }

                function addCommas(value) {
                    return value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
                }

              </script>
              <h1> Preço: </h1> 
              <input class="preco" type="text" name="minimo" placeholder="Mínimo" onkeyup="changeValue(this)"/>
              <input class="preco" type="text" name="maximo" placeholder="Máximo" onkeyup="changeValue(this)"/> <br><br>
              <!--/Preço FILT-->

              <!--Ano FILT-->
              <h1> Ano: </h1> 
              <input class="preco" type="number" name="ano_minimo" placeholder="Mínimo">
              <input class="preco" type="number" name="ano_maximo" placeholder="Máximo"> <br><br>
              <!--/Ano FILT-->

              <!--Blindagem FILT-->
              <h1>Blindagem: </h1>
              <input class="checkbox" type="checkbox" name="blindagem" value="Sim" style="margin-left: 20px;">
              <label for="Novo" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Sim</label>
              <br>
              <input class="checkbox" type="checkbox" name="blindagem" value="Não" style="margin-left: 20px;">
              <label for="Usado" style="margin-left: 15px; font-family:Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> Não</label>       
              <!--/Blindagem FILT-->
              <br><br>
              <!--Filtrar FILT-->
              <p class="botao3" id="centro" style="margin-left:15px;">      
                  <button type="submit" name="botao" value="negativo" style="border: none; background-color: Transparent;"><a> Filtrar </a></button>     
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
      <br>
      <!--Fim Filtragem-->
      <h1 style="color: black;"> Escolha a Marca: </h1>
            <form method="POST" action=""> 
              <!--DIV MARCAS-->
              <div class="abraço" style="display: flex; text-align: left;">
                <p class="botao2" id="centro">      
                  <a title="BMW" ><button type="submit" name="marca" value="BMW" style="border: none;background-color: Transparent;"><img src="Imagens/bmwx6/logo.png" height="80px" style="margin-top: 5px;"></button> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a  title="Chevrolet"><button type="submit" name="marca" value="Chevrolet" style="border: none;background-color: Transparent;"><img src="https://logosmarcas.net/wp-content/uploads/2021/04/Chevrolet-Logo.png" height="80px" style="margin-top: 5px;"></button> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a title="Lamborghini"><button type="submit" name="marca" value="Lamborghini" style="border: none;background-color: Transparent;"><img src="https://logosmarcas.net/wp-content/uploads/2021/04/Lamborghini-Logo.png" height="80px" style="margin-top: 5px;"></button> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a title="Ferrari"><button type="submit" name="marca" value="Ferrari" style="border: none;background-color: Transparent;"><img src="https://logodownload.org/wp-content/uploads/2017/05/ferrari-logo-8.png" height="80px" style="margin-top: 5px;"></button> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a title="Mercedes"><button type="submit" name="marca" value="Mercedes" style="border: none;background-color: Transparent;"><img src="https://promocaoreunidas.com.br/themes/lp-reunidas-veiculos-homolog/assets/images/mercedes-benz-logo.png" height="80px" style="margin-top: 5px;"></button> </a>       
                </p>

                <p class="botao2" id="centro">      
                  <a title="Porsche"><button type="submit" name="marca" value="Porsche" style="border: none;background-color: Transparent;"><img src="https://logosmarcas.net/wp-content/uploads/2021/04/Porsche-Logo.png" height="80px" style="margin-top: 5px;"></button> </a>       
                </p>
                
                <br> <br> <br> <br> <br>
              </div class="abraço"> 
              
              <!--FIM: DIV MARCAS-->
              
            
              <!--MODELO FILT-->
              <h1 style="color: black;"> Selecione o modelo: </h1>
              <select class="opicoes" name="modelo" style="margin-top: 10px; margin-left: 20px;">
                <option selected="selected" class="Country" style="display:none;">Modelo</option>
                  <?php
                  $marca1 = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);            
                  $result_usuarios1 = "SELECT * FROM veiculos WHERE marca LIKE '$marca1'";
                  $resultado_usuarios1 = mysqli_query($conn, $result_usuarios1);
                  while($rows_cursos1 = mysqli_fetch_assoc($resultado_usuarios1)){
                  ?>
                    <option name="modelo" value="<?php echo $rows_cursos1['modelo'];?>"><?php echo $rows_cursos1['modelo']?></option>
                  <?php
                  }
                  ?>
                
              </select> 
              <p class="botao3" id="centro" style="margin-left:15px;">      
                  <button type="submit" name="botao" value="positivo" style="border: none; background-color: Transparent;"><a> Buscar </a></button>     
              </p>
            </form>
      <!--Conteúdo-->
			<center>		
				<?php
				//Receber o número da página
				$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
				
				//Setar a quantidade de itens por pagina
				$qnt_result_pg = 9;
				
				//calcular o inicio visualização
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

				//Receber dados da filtragem
        $botao = filter_input(INPUT_POST, 'botao', FILTER_SANITIZE_STRING);
				
        $quilo1 = filter_input(INPUT_POST, 'quilo', FILTER_SANITIZE_STRING);
        $minimo = filter_input(INPUT_POST, 'minimo', FILTER_SANITIZE_STRING);
        $maximo = filter_input(INPUT_POST, 'maximo', FILTER_SANITIZE_STRING);
        $preço_minimo = number_format($minimo,3, '.', '');
        $preço_maximo = number_format($maximo,3, '.', '');
        $ano_minimo = filter_input(INPUT_POST, 'ano_minimo', FILTER_SANITIZE_NUMBER_INT);
        $ano_maximo = filter_input(INPUT_POST, 'ano_maximo', FILTER_SANITIZE_NUMBER_INT);
        $blindagem1 = filter_input(INPUT_POST, 'blindagem', FILTER_SANITIZE_STRING);
        //Blindagem
        if($blindagem1==1){
          $blindagem = $blindagem1;
        }else{
          $blindagem = '';
        }
        //Quilometragem
        if($quilo1==1){
          $quilo = $quilo1;
        }else{
          $quilo = '';
        }
        $cambio = filter_input(INPUT_POST, 'cambio', FILTER_SANITIZE_STRING);
        //Bando de dados
        if($botao=="negativo"){
          $result_usuarios = "SELECT * FROM veiculos WHERE ano BETWEEN '%$ano_minimo%' AND '$ano_maximo'AND preço BETWEEN $preço_minimo AND $preço_maximo AND qm_estado LIKE '%$quilo%' AND blindagem LIKE '%$blindagem%' AND cambio LIKE '%$cambio%' LIMIT $inicio, $qnt_result_pg";
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
        }else if($botao=='positivo'){
          $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
          $result_usuarios = "SELECT * FROM veiculos WHERE marca LIKE '%$marca1%' AND modelo LIKE '%$modelo%' LIMIT $inicio, $qnt_result_pg";
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
        }else{
          $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
          $result_usuarios = "SELECT * FROM veiculos WHERE marca LIKE '%$marca1%' LIMIT $inicio, $qnt_result_pg";
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

