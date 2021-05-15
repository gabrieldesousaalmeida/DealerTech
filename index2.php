<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">	
        <title>Saga Veículos de Luxo</title>
        
        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">

        <link rel= "stylesheet" href= "lib/bootstrap/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

        <link href="css/unemstyle.css" rel="stylesheet">
        <link href="css/carrosstyle.css" rel="stylesheet">	
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
        }
        .botao a {  
        font: bold 12px/24px 'Times New Roman', Times, serif;	
        padding:0px;
        text-decoration: none;
        text-align:center;	
        color:#fff;
        background: rgba(0, 0, 255, 0) url('botao_link.gif')
        no-repeat center center;	
        width: 150px;  
        height: 67px;	
        display:block;
        border-radius: 2px;
        border-width: 0.0px;
        border-style:solid;
        border-color: #fff;
        font-size: 18px;
	    }
        h1 {
           color: red;
           font-size: 60px;
           text-align: center;
           text-shadow: 0 1px 0 #ccc,
           0 2px 0 #c9c9c9,
           0 3px 0 #bbb,
           0 4px 0 #b9b9b9,
           0 5px 0 #aaa,
           0 6px 1px rgba(0,0,0,.1),
           0 0 5px rgba(0,0,0,.1),
           0 1px 3px rgba(0,0,0,.3),
           0 3px 5px rgba(0,0,0,.2),
           0 5px 10px rgba(0,0,0,.25),
           0 10px 10px rgba(0,0,0,.2),
           0 20px 20px rgba(0,0,0,.15);
           font-family: 'Times New Roman', Times, serif;
        }
        h2{
            color: gray;
            font-size: 20px;
        }
        .botao a:hover { 
            background: rgba(255, 255, 255, 0.144) url('botao_hover.gif') no-repeat 
            center center;
            transition: 0.2s;
        }
        </style>
    </head>	
    <body>
        <?php
        if(isset($_SESSION['usuarioNiveisAcessoId'])){
            $tipo = $_SESSION['usuarioNiveisAcessoId'];
        }else{
            $tipo="";
        }
		?>
        <div class="container-fluid">
            <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
            <div class="divimage"> 
            <center>
                <?php
                if($tipo=="cliente"){
                ?>
                    <p class="botao" id="centro">            
                        <a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Fazer Logout"><i class="fas fa-user-edit"></i><br><?php echo " ". $_SESSION['usuarioNome'];?><br><t style="color:red;">Sair<t></a>
                    </p> 
                <?php
                }else if($tipo=="admin"){
                ?>
                    <p class="botao" id="centro">      
                        <a href="http://localhost/DealerTech/admin/admin.php" title="Opções Administrativas"><i class="fas fa-cog"></i><br><br>Admin</a>       
                    </p> 
                    <p class="botao" id="centro"> 
                        <a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Fazer Loggout"><i class="fas fa-user-edit"></i><br><?php echo " ". $_SESSION['usuarioNome'];?><br><t style="color:red;">Sair<t></a> 
                    </p>
                <?php    
                }else{
                ?>
                    <p class="botao" id="centro">       
                        <a href="http://localhost/DealerTech/login.php" title="Faça Login"> <br> <i class="fas fa-user-edit"></i> LOGIN </a>
                    </p> 
                    <p class="botao" id="centro"> 
                        <a href="http://localhost/DealerTech/cadastro.php" title="Fazer Cadastro"> <br> <i class="fas fa-cog"></i></i> CADASTRO </a>
                    </p>
                <?php    
                }
                ?>     
            </center>
            </div>
            <h1> Saga veículos de Luxo </h1> <br>
            <div style="display: flex;">
            <div class="info" style="background: rgb(202, 202, 202); border-radius: 3px; width: 320px; padding-left: 200px; border: none;">
                <h2>
                    Conquiste seu Carro e curta <br>
                    o Puro Prazer de Dirigir!
                </h2>
            </div>

            <div class="info" style="background: rgb(202, 202, 202); border-radius: 3px; width: 320px; margin-left: 15px; border:none">
                <h2 style="text-align: center;">
                    Aqui temos os melhores <br> 
                    Veículos e melhores Marcas
                </h2>
            </div>

            <div class="info" style="background: rgb(202, 202, 202); border-radius: 3px; width: 320px; padding-right: 200px; margin-left: 15px;border:none">
                <h2>
                    <h10 style="color: transparent;">
                    ..</h10> Aqui, na SVL você não erra <br>
                    <h10 style="color: transparent;">
                        ..
                    </h10>Confira melhor!
                </h2>
            </div>

            </div>
            <center> <img src="Imagens/bm.jpg"> </center>
            <div style="display: flex; margin-left: 100px;">
                <img src="Imagens/Lista de Carros/01/logo.png" style="height: 300px;">
                <img src="Imagens/Lista de Carros/03/logo.png" style="height: 300px;margin-left: -90px; ">
                <img src="Imagens/Lista de Carros/02/logo.png" style="height: 300px;">
            </div>
            <br> 
            <center> <h2 style="font-family: 'Times New Roman', Times, serif; font-size: 30px;"> Carros Destaques:</h2> </center>
            <h33 style="color: transparent"> ....</h33>
            <div class="carro" style="margin-top: 100px; box-shadow: rgb(49, 48, 48) 0px 3px 9px;margin-left:300px;">
                <!--Início do Slide-->
                <br> 
                <center>
                <img src="Imagens/Lista de Carros/01/logo.png" style="height: 40px; ">
                </center>
                <ul class="slider" style="margin-left: -20px;">
                    <li>
                        <input type="radio" id="slide1" name="slide" checked>
                        <label for="slide1"></label>
                        <img src="Imagens/Lista de Carros/01/1.jpg"/>
                    </li>
                    <li>
                        <input type="radio" id="slide2" name="slide">
                        <label for="slide2"></label>
                        <img src="Imagens/Lista de Carros/01/2.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide3" name="slide">
                        <label for="slide3"></label>
                        <img src="Imagens/Lista de Carros/01/3.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide4" name="slide">
                        <label for="slide4"></label>
                        <img src="Imagens/Lista de Carros/01/4.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide5" name="slide">
                        <label for="slide5"></label>
                        <img src="Imagens/Lista de Carros/01/5.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide6" name="slide">
                        <label for="slide6"></label>
                        <img src="Imagens/Lista de Carros/01/6.jpg" />
                    </li>
                </ul>
                <!--Fim do Slide-->
                <center>
                <h7> PORSCHE </h7> <br>
                    
                <h8> Porsche Panamera </h8> <br>
                <h10> <i class="fas fa-dollar-sign"></i>699.990</h10> <br>
                <h11> 0km - 2018/19 </h11> <br> <br> 
                </center>
            </div>
            <!-- 2 CARRO------------------------------------------------------------------------------------------------------------>
            <div class="carro" style="margin-top: 100px; box-shadow: rgb(49, 48, 48) 0px 3px 9px;display: inline-block;margin-left:100px">
                <!--Início do Slide-->
                <br> 
                <center>
                <img src="Imagens/Lista de Carros/02/logo.png" style="height: 40px; ">
                </center>
                <ul class="edils" style="margin-left: -20px;">
                    <li>
                        <input type="radio" id="slide7" name="edils" checked>
                        <label for="slide7"></label>
                        <img src="Imagens/Lista de Carros/02/1.jpg"/>
                    </li>
                    <li>
                        <input type="radio" id="slide8" name="edils">
                        <label for="slide8"></label>
                        <img src="Imagens/Lista de Carros/02/2.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide9" name="edils">
                        <label for="slide9"></label>
                        <img src="Imagens/Lista de Carros/02/3.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide10" name="edils">
                        <label for="slide10"></label>
                        <img src="Imagens/Lista de Carros/02/4.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide11" name="edils">
                        <label for="slide11"></label>
                        <img src="Imagens/Lista de Carros/02/5.jpg" />
                    </li>
                    <li>
                        <input type="radio" id="slide12" name="edils">
                        <label for="slide12"></label>
                        <img src="Imagens/Lista de Carros/02/6.jpg" />
                    </li>
                </ul>
            
                <!--Fim do Slide-->
                <center>
                <h7> FERRARI </h7> <br> 
                <h8> Ferrari 458 Itália </h8> <br>
                <h10> <i class="fas fa-dollar-sign"></i>798.990</h10> <br>
                <h11> 2.000km - 2016/17 </h11> <br> <br>
                </center>
            </div>
            <!--CARRO 3------------------------------------------------------------------------------------------------------------>
            <h33 style="color: transparent"> ....</h33>
        </div>
        <script src="lib/bootstrap/js/jquery.min.js"></script>
        <script src= "lib/bootstrap/js/Bootstrap.min.js" ></script>
    </body>	
</html>