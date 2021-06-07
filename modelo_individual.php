<?php
session_start();
include_once("conexao.php");

$modelo= basename($_SERVER['PHP_SELF'],'.php');
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>
        <title><?php echo $modelo?></title>        
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
        #centro{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
        }
        .divimage{
            background-image: url(http://localhost/DealerTech/Imagens/gg.png);
            height: 648px;    
        }
        .botao  {
        margin-top: 42%;
        padding:0px;
        
        
        margin-left: -200px;
        }
        .botao a {  
        font: bold 12px/24px 'Times New Roman', Times, serif;	
        padding:0px;
        text-decoration: none;
        text-align:center;	
        color: #A30000;
        background: #fff;	
        width: 150px;  
        height: 67px;	
        display:block;
        font-size: 15px;
        border-radius: 5px;
        
	    }
      
       
        .botao a:hover { 
            background: #660000;
            transition: 0.5s;
            color:#fff;    
            display:block;        
            box-shadow: red 0.0em 0.1em 0.40em;
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
.carro{
  background: linear-gradient(#770101, #cc0000 ,#770101);
  width: 100%;
  height: 500px;
  margin-top: 20px;
  
}
.ficha{
  background-color: #fff;
  height: 590px;
}
h5{
  margin-top: 20px;
  color: #fff;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  margin-left:800px;
  margin-top: -70px;
}
h1{
  margin-top: 20px;
  color: #fff;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  margin-left:800px;
  margin-top: 0px;
  text-transform: uppercase;
  text-shadow: #000 1px 2px 3px;
}
h10{
  margin-top: 20px;
  color: #fff;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  margin-left:800px;
  margin-top: 20px;
}
h2{
  margin-top: 40px;
  color:#fff;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  margin-left:725px;
  margin-top: 20px;
  border:2px solid red;
  margin-right: 470px;
  text-align: center;
  box-shadow: red 0.0em 0.1em 0.40em;
  font-size: 25px;
}
h3{
  text-align: center;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
}
h6{
	font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
    color: #a30000;
}
h4{
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  font-size: 30px;
}
.infocarro{
  border: 1px solid #a30000;
  width: 470px;
  height: 320px;
  margin-left: 130px;
  border-radius: 5px;
}
h12{
  color: #a30000;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  font-size: 25px;
}
h13{
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  color: #a30000;  
}

        </style>
        
    </head>	
    <body>
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
              <img src="http://localhost/DealerTech/Imagens/logof2.jpg" style="height: 40px;border-radius: 10px;">
              <form class="form-inline my-2 my-lg-0">
              </form>
            </div>
          </nav>
      </div>
        <div class="carro"> 
        
        <?php
        $result_cursos = "SELECT * FROM veiculos WHERE modelo='$modelo'";
        $resultado_cursos = mysqli_query($conn, $result_cursos);
        
				while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {   
          $categoria_id = $rows_cursos['id'];        
          $result_categorias = "SELECT * FROM imagens WHERE id = '$categoria_id'";
          $resultado_categorias = mysqli_query($conn, $result_categorias);
          
          while ($rows_categorias = mysqli_fetch_array($resultado_categorias)) { 
        ?>
        <p class="botao" id="centro" style="margin-top: 15px; margin-left: 20px;">       
          <a href="https://www.youtube.com/watch?v=pcQx9eHKu8c" title="" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> <br>  Detalhes do Carro  </a>
        </p>
            <h5> Garanta já essa oferta! </h5>
        <h1><?php echo $rows_cursos['modelo']."<br>";?></h1>
        <h10>Motor 3,0 l 6 cilindros</h10>    
        <h2> Preço: <br> R$ 662.950 </h2>  
        <p class="botao" id="centro" style="margin-top: 15px; margin-left: 728px;">       
          <a href="#" title="" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> <br> <b><i class="fas fa-shopping-cart"></i> Comprar </a>
        </p>
        <div class="">
        <?php echo "<img src='http://localhost/DealerTech/Imagens/Marcas/".$rows_cursos['marca'].".png"."'height='350' style='margin-top: -240px; margin-left: 920px'>";?>
      </div>
        <!--Bot carrousel-->
        <center>
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width: 600px; margin-right: 650px; margin-top: -340px;" loop>
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <?php echo "<img src='http://localhost/DealerTech/veiculos/".$rows_cursos['marca']."/".$rows_cursos['modelo']."/".$rows_categorias['slide1'].".jpeg"."' height='350' width='400' class='d-block w-100' style='border-radius: 10px;'>";?>
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="Imagens/2.jpeg" height="350" width="400" class="d-block w-100" alt="..." style="border-radius: 10px;">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="Imagens/3.jpeg" height="350" width="400" class="d-block w-100" alt="..." style="border-radius: 10px;">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="Imagens/4.jpeg" height="350" width="400" class="d-block w-100" alt="..." style="border-radius: 10px;">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="Imagens/5.jpeg" height="350" width="400" class="d-block w-100" alt="..." style="border-radius: 10px;">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="Imagens/6.jpeg" height="350" width="400" class="d-block w-100" alt="..." style="border-radius: 10px;">
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p></p>
      </div>
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </center>
	<!--Bot carrousel-->
      </div> <br>
      <h3> Saiba mais sobre a BMW X6 <i class="fas fa-arrow-alt-circle-down"></i> </h3> <br> <br>
      
      <div class="Abraço" style="display: flex;">
      
      <div class="infocarro">
      <center> <h6 style="font-size: 25px; background: linear-gradient(90deg,#770101, #cc0000 ,#770101); color: #fff;"> Performace </h6> <br> </center>

       <h6 style="font-size: 17px;"> <i class="fas fa-long-arrow-alt-right"></i> Motor: 3,0 l 6 cilindros em linha 340 cv <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Transmissão Automática de 8 velocidade <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Potência: 340 HP </h13> <br> </h6>
      </div>
      <div class="infocarro">
      <center> <h6 style="font-size: 25px;background: linear-gradient(90deg,#770101, #cc0000 ,#770101); color: #fff;"> Design </h6> <br> </center>

       <h6 style="font-size: 17px;"> <i class="fas fa-long-arrow-alt-right"></i> Dimensões: 4.935 mm C x 2.004 mm L x 1.696 mm A <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Rodas: Dianteiras: 22" D x 9,5" L; Traseiras: 22" D x 10,5" L <br> <br> 
             <i class="fas fa-long-arrow-alt-right"></i> Acabamento externo em BMW individual High-gloss Shadow Line <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Acabamento interno em Dark Oxide Silver <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Revestimento do teto em BMW Individual Anthracite <br> <br>
            </h6>
      </div>

      </div class="abraço"> <br>

      <div class="Abraço" style="display: flex;">
      
      <div class="infocarro">
      <center> <h6 style="font-size: 25px;background: linear-gradient(90deg,#770101, #cc0000 ,#770101); color: #fff;"> Tecnologia </h6> <br> </center>

       <h6 style="font-size: 17px;"> <i class="fas fa-long-arrow-alt-right"></i> BMW Head-Up Display <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Processamento da informação até 50% mais rápido <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> O painel de instrumentos projeta e amplia a imagem no para-brisa <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> O resultado é uma visualização ampla em alta resolução e em cores <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Fácil visualização independentemente da iluminação
	   </h6> <br>
      </div>
      <div class="infocarro">
      <center> <h6 style="font-size: 25px;background: linear-gradient(90deg,#770101, #cc0000 ,#770101); color: #fff;"> Segurança </h6> <br> </center>

       <h6 style="font-size: 17px;"> <i class="fas fa-long-arrow-alt-right"></i> Freios ABS <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Airbags Laterais e Frontais  <br> <br> 
             <i class="fas fa-long-arrow-alt-right"></i> ISOFIX para fixação de cadeiras infantis <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Cinto de 3 pontos para todos <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Controle de Tração <br> <br>
             <i class="fas fa-long-arrow-alt-right"></i> Chamada de assistência de Emergência <br> <br>
	   </h6>
      </div>

      </div class="abraço"> <br> 

      <div class="ficha">
       <br> <br>
       <center>
       <h4>
         BMW X6:
         <hr> </hr>
         <hr> </hr>
      </h4> <br> 
      </center>
        <h4 style="font-size: 23px;margin-left: 40px; color:#800000;"><i> Marca:</i> </h4> <h4 style="font-size: 17px;margin-left: 40px;"> BMW </h4> 
        <h4 style="font-size: 23px;margin-left: 40px;color: #800000;"><i>Modelo: </i></h4> <h4 style="font-size: 17px;margin-left: 40px;"> xdrive40i m sport </h4> 
        <h4 style="font-size: 23px;margin-left: 40px;color: #800000;"><i>Motor:</i></h4>  <h4 style="font-size: 17px;margin-left: 40px;"> 3,0 l 6 cilindros em linha 340 cv </h4> 
        <h4 style="font-size: 23px;margin-left: 40px;color: #800000;"><i>Ano:</i></h4> <h4 style="font-size: 17px;margin-left: 40px;"> 2020 </h4> 
		<h4 style="font-size: 23px;margin-left: 40px;color: #800000; text-align: right; margin-right: 40px;margin-top: -250px; "><i>Km:</i></h4><h4 style="font-size: 17px;margin-left: 40px;text-align: right;margin-right: 40px;">  0 Km  </h4> 
        <h4 style="font-size: 23px;margin-left: 40px;color: #800000;text-align: right;margin-right: 40px;"><i>Câmbio:</i></h4><h4 style="font-size: 17px;margin-left: 40px;text-align: right;margin-right: 40px;">  Automático - 8 velocidades </h4> 
        <h4 style="font-size: 23px;margin-left: 40px;color: #800000;text-align: right;margin-right: 40px;"><i>Cor:</i></h4><h4 style="font-size: 17px;margin-left: 40px;text-align: right;margin-right: 40px;">  Cinza </h4> 
        <h4 style="font-size: 23px;margin-left: 40px;color: #800000;text-align: right;margin-right: 40px;"><i>Blindagem:</i></h4><h4 style="font-size: 17px;margin-left: 40px;text-align: right;margin-right: 40px;">  Não </h4> 
	
        <!--IMAGEM--> 
	
        <!--FIM; IMAGEM-->
        <?php echo "<img class='ggimage' src='http://localhost/DealerTech/Imagens/Marcas/".$rows_cursos['marca'].".png"."' style='height: 80px; opacity: 0.5; margin-left: 624px; margin-top:0px;'>";?>
	    <?php
          }
        }
	    ?>
      </div class="ficha">  
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
        <script type="text/javascript" src="http://localhost/DealerTech/lib/elevatezoom-master/jquery.elevateZoom-2.5.3.min.js"> </script>
    </body>	
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'/>
	<title>jQuery elevateZoom Demo</title>
	<script src='http://localhost/DealerTech/lib/elevatezoom-master/jquery-1.8.3.min.js'></script>
	<script src='http://localhost/DealerTech/lib/elevatezoom-master/jquery.elevatezoom.js'></script>
</head>
<body>
	
<img id="zoom_01" src='Imagens/small/12.png' data-zoom-image="Imagens/large/image1.jpeg" style="margin-left: 450px; margin-top: -670px; border-radius: 8px;">

<br />
<script>
    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750
   }); 
</script>

</body>
</html>