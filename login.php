<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/validform.js"></script>
  </head>
  <body>
      <div class="container">
        <div class="content first-content" style="display:none; ">
            <!--coluna 1-->
            <div class="first-colum"> 
                <h2 class="title" style="color: #fff;"> Bem-vindo de Volta!</h2>
                <p class="description"> Para se manter conectado conosco </p>
                <p class="description"> por favor faça o login com suas informações pessoais </p>
                <button class="btn"> Entrar </button>
            </div> 
            <!--coluna 2-->
            <div class="second-culum"> 
                <h2 class="title"> Criar Conta </h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <li class="item-social-media"><a href="#"> facebook</a></li>
                        <li class="item-social-media"><a href="#"> google+</a></li>
                    </ul>
                </div> <!-- FIM: social-media-->
                <p class="description" style="color: #95a5a6;"> ou use seu e-mail para registro: </p>
                <form class="form">
                    <!-- ICONES REDES SOCIAIS E INPUT-->
                    <label for="" class="label-input"> 
                        <input type="text" placeholder="Nome">
                        <i class="far fa-user icon-modify"></i>
                    </label>
                    <label for="" class="label-input"> 
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email">                      
                    </label>
                    <label for="" class="label-input "> 
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Senha">  
                    </label>
                    <button class="btn2"> Inscrever-se </button>
                </form>
            </div> <!-- FIM: second colum-->
        </div> <!--FIM: first content-->

        <!--PARTE: second-content-->
        <div class="content second-content" style="display: flex;"> 
             <!--coluna 1-->
             <div class="first-column">
                <h2 class="title" style="color: #fff;"> Olá, Amigo!</h2>
                <p class="description"> Insira seus dados pessoais </p>
                <p class="description"> e comece a jornada conosco </p>
                <a href="cadastro.html"> <button class="btn" style="transition: 0.25s;"> Inscrever-se </button> </a>
            </div> 
            <!--coluna 2-->
            <div class="second-culumn"> 
                <h2 class="title" style="color: red;"> Entrar </h2>
                <div class="social-media">
                    <ul class="list-social-media">
                        <a href="https://pt-br.facebook.com/" class="link-social-media">
                         <li class="item-social-media" style="transition: 0.25s;"> <i class="fab fa-facebook-f"> </i></li>
                        </a>
                        <a href="https://www.google.com.br/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjzuPK6-a_wAhUbpJUCHedUB8YQFjABegQIAxAD&url=https%3A%2F%2Fwww.google.com%2Faccounts%2FLogin%3Fhl%3Dpt-br&usg=AOvVaw0P3mx0_gxPK-FstnzSM72F" class="link-social-media">
                         <li class="item-social-media" style="transition: 0.25s;"> <i class="fab fa-google-plus-g"></i></li>
                        </a>
                    </ul>
                </div> <!-- FIM: social-media-->
                <p class="description" style="color: #95a5a6;"> ou use sua conta de e-mail: </p>
                <form class="form" method="POST" action="http://localhost/DealerTech/php/salva_mensagem.php"> 
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-envelope"></i>
                        <input type="email" placeholder=" Email" style="box-shadow: 0 0 0 0;outline: 0;">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder=" Senha" style="box-shadow: 0 0 0 0;outline: 0;">
                    </label>
                    <a href="#" style="color: #95a5a6;"> Esqueceu sua senha </a>
                    <a href=""><button class="btn2" style="transition: 0.25s;"> Entrar </button></a>
                </form>
            </div> <!-- FIM: second colum-->
        </div> <!-- FIM: second content-->
      </div>
  </body>
  <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>

</html>