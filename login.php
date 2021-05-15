<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v10.0&appId=466869461267354&autoLogAppEvents=1" nonce="lNr0woZL"></script>
  </head>
  <body>
      <div class="container">
        <!--PARTE: second-content-->
        <div class="content second-content" style="display: flex;"> 
             <!--coluna 1-->
             <div class="first-column">
                <h2 class="title" style="color: #fff;"> Olá, Amigo!</h2>
                <p class="description"> Insira seus dados pessoais </p>
                <p class="description"> e comece a jornada conosco </p>
                <a href="http://localhost/DealerTech/cadastro.php"> <button class="btn" style="transition: 0.25s;"> Inscrever-se </button> </a>
            </div> 
            <!--coluna 2-->
            <div class="second-culumn"> 
                <h2 class="title" style="color: red;"> Entrar </h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <div class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false">
                            <a href="https://pt-br.facebook.com/" class="link-social-media">
                            <li class="item-social-media" style="transition: 0.25s;"> <i class="fab fa-facebook-f"> </i></li>
                            </a>
                        </div>
                        <a href="https://www.google.com.br/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjzuPK6-a_wAhUbpJUCHedUB8YQFjABegQIAxAD&url=https%3A%2F%2Fwww.google.com%2Faccounts%2FLogin%3Fhl%3Dpt-br&usg=AOvVaw0P3mx0_gxPK-FstnzSM72F" class="link-social-media">
                         <li class="item-social-media" style="transition: 0.25s;"> <i class="fab fa-google-plus-g"></i></li>
                        </a>
                    </ul>
                </div> <!-- FIM: social-media-->
                <p class="description" style="color: #95a5a6;"> ou use sua conta de e-mail:<br>
                    <?php 
                    if(isset($_SESSION['loginErro'])){
				    echo $_SESSION['loginErro'];
				    unset($_SESSION['loginErro']);
			        }
                    ?>
                        
                </p>
                <form class="form" method="POST" action="php/login_usuario/valida.php" name="dados"> 
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder=" Email" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;" name="email">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder=" Senha" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: 'Times New Roman', Times, serif;" name="senha">
                    </label>
                    <a href="#" style="color: #95a5a6;"> Esqueceu sua senha </a>
                    <button class="btn2" style="transition: 0.25s;" onclick="ValidForm2()"> Entrar </button>
                </form>
            </div> <!-- FIM: second colum-->
        </div> <!-- FIM: second content-->
      </div>
  </body>
  <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>

</html>