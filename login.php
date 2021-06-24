<?php
    include_once 'php/login_usuario/face.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!---->
		<link href="css/signin.css" rel="stylesheet">
        <link href="css/stylebtn2.css" rel="stylesheet">
        <script type="text/javascript" src="http://localhost/DealerTech/js/face.js"></script>
        <!--<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">-->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="185976890928-n2klo3dp7v3foalnjdpfunvgku1oluef.apps.googleusercontent.com">
        
        <div id="fb-root"></div>
    </head>
    <body style="background: lavender; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;margin-left: 12%;">
        <div class="container" style="margin-top: 6%;">
            <!--PARTE: second-content-->
            <div class="content second-content" style="display: flex; height: 440px;"> 
                <!--coluna 1-->
                <div class="first-column">
                    <h2 class="title" style="color: #fff;"> Olá, Amigo!</h2>
                    <p class="description"> Insira seus dados pessoais </p>
                    <p class="description"> e comece a jornada conosco </p>
                    <a href="http://localhost/DealerTech/cadastro.php" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;"> <button class="btn2" style="transition: 0.25s;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif; border: 1px solid white;"> Inscrever-se </button> </a>
                </div> 
                <!--coluna 2-->
                <div class="second-culumn"> 
                    <h2 class="title" style="color: red;"> Entrar </h2>
                    <div class="social-media">
                        <ul class="list-social-media">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <span class="g-signin2" data-onsuccess="onSignIn" style="margin-top: 20px;"></span>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p class="botao" style="box-shadow: rgb(182, 182, 182) 1px 1px 0px;">
                                    <a href="<?php echo $loginUrl; ?>" title=""> <i class="fab fa-facebook-f" style="color: blue; width: 30px; heigth: 200px;"></i>   Facebook </a>
                                </p>
                            </div>	
                        </ul>
                    </div> <!-- FIM: social-media-->
                    <p class="description" style="color: #95a5a6;"> ou use sua conta de e-mail:<br>
                    <div id="status">
                    </div>
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
                            <input type="email" placeholder=" Email" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;" name="email">
                        </label>
                        <label for="" class="label-input icon-modify">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder=" Senha" style="box-shadow: 0 0 0 0;outline: 0;color: rgb(105, 99, 99); font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;" name="senha">
                        </label>
                        <a href="php/redefinir_senha/redefinir.php" style="color: #95a5a6;" data-toggle="modal" data-target="#exampleModal"> Esqueceu sua senha </a>
                        <button class="btn2" style="transition: 0.25s;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;" onclick="ValidForm2()"> Entrar </button>
                    </form>
                </div> <!-- FIM: second colum-->
            </div> <!-- FIM: second content-->
        </div>

        <!-- Modal -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Redefinir Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Para uma melhor segurança:
                Insira seu email, assim poderemos enviar uma mensagem para você redefinir sua senha. 
                <form method="POST" action="http://localhost/DealerTech/php/redefinir_senha/processa_email.php">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Email:</label>
                        <input type="email" name="email_senha" class="form-control" id="recipient-name">
                    </div>
                
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn2" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn2">Enviar Email</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
        <script>
        function onSignIn(googleUser) {
			var profile = googleUser.getBasicProfile();
			var userID = profile.getId(); 
			var userName = profile.getName(); 
			var userPicture = profile.getImageUrl(); 
			var userEmail = profile.getEmail(); 			 
			var userToken = googleUser.getAuthResponse().id_token; 
			
			//document.getElementById('msg').innerHTML = userEmail;
			if(userEmail !== ''){
				var dados = {
					userID:userID,
					userName:userName,
					userPicture:userPicture,
					userEmail:userEmail
				};
				$.post('php/login_usuario/valida_google.php', dados, function(retorna){
					if(retorna === '"erro"'){
						var msg = "<div class='alert alert-danger'>Usuário não encontrado com esse e-mail!</div>";
						document.getElementById('msg').innerHTML = msg;
					}else{
						window.location.href = retorna;
					}
					
				});
			}else{
				var msg = "Usuário não encontrado!";
				document.getElementById('msg').innerHTML = msg;
			}
		}
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>