<?php
    include_once 'php/login_usuario/face.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
        <link href="css/stylebtn2.css" rel="stylesheet">
        <script type="text/javascript" src="http://localhost/DealerTech/js/face.js"></script>
        <!--<link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">-->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="185976890928-n2klo3dp7v3foalnjdpfunvgku1oluef.apps.googleusercontent.com">
        
        <div id="fb-root"></div>
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
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <span class="g-signin2" data-onsuccess="onSignIn" style="margin-top: 20px;"></span>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <p class="botao">
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
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </body>
</html>