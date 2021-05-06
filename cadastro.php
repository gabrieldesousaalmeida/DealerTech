<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="text/javascript" href="js/validform.js">
  </head>
  <body>
      <div class="container">
        <div class="content first-content" style="display:none; ">
            <!--coluna 1-->
            <div class="first-colum"> 
                <h2 class="title" style="color: #fff;"> Bem-vindo de Volta!</h2>
                <p class="description"> Para se manter conectado conosco </p>
                <p class="description"> por favor faça o login com suas informações pessoais </p>
                <button class="btn" type="submit" onclick="return ValidForm1()"> Entrar </button>
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
                <form class="form" method="POST" action="http://localhost/DealerTech/php/salva_mensagem.php">
                    <!-- ICONES REDES SOCIAIS E INPUT-->
                    <label for="" class="label-input"> 
                        <input id="caixa" type="text" placeholder="Nome" name="nome">
                        <i class="far fa-user icon-modify"></i>
                    </label>
                    <label for="" class="label-input"> 
                        <i class="far fa-envelope icon-modify"></i>
                        <input id="caixa" type="email" placeholder="Email" name="email">                      
                    </label>
                    <label for="" class="label-input "> 
                        <i class="fas fa-lock icon-modify"></i>
                        <input id="caixa" type="password" placeholder="Senha" name="senha">  
                    </label>
                    <button class="btn2" type="submit" onclick="return ValidForm1()" value="Inscreva-se">Inscreva-se</button> 
                </form>
            </div> <!-- FIM: second colum-->
        </div> <!--FIM: first content-->

        <!--PARTE: second-content-->
        <div class="content second-content" style="display: flex;"> 
             <!--coluna 1-->
             <div class="first-column">
                <h2 class="title" style="color: #fff;"> Olá, Amigo!</h2>
                <p class="description"> Você já possui um cadastro? </p>
                <p class="description"> então click no botão abaixo </p>
                <a href="login.html"> <button class="btn" style="transition: 0.25s;"> login </button> </a>
            </div> 
            <!--coluna 2-->
            <div class="second-culumn"> 
                <h2 class="title" style="color: red;"> Cadastro </h2>
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
                <p class="description" style="color: #95a5a6;"> por favor, informe os seguintes dados</p>
                <form class="form" method="POST" action="http://localhost/DealerTech/php/salva_mensagem.php"> 
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-user icon-modify"></i>
                        <input id="caixa" type="text" placeholder="Nome" style="box-shadow: 0 0 0 0;outline: 0;" name="nome">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="far fa-envelope"></i>
                        <input id="caixa" type="email" placeholder=" Email" style="box-shadow: 0 0 0 0;outline: 0;" name="email">
                    </label>
                    <label for="" class="label-input icon-modify">
                        <i class="fas fa-lock"></i>
                        <input id="caixa" type="password" placeholder=" Senha" style="box-shadow: 0 0 0 0;outline: 0;" name="senha">
                    </label>
                    
                    <button class="btn2" style="transition: 0.25s;" type="submit" onclick="return ValidForm1()">Inscreva-se</button>  
                </form>
            </div> <!-- FIM: second colum-->
        </div> <!-- FIM: second content-->
      </div>
  </body>
  <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>

</html>