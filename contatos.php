<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br"> 
    <head>	
        <meta charset="utf-8"/>	
        <title>Contatos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="css/unemstyle.css" rel="stylesheet">	
        <link href="css/contatostyle.css" rel="stylesheet">
        <style>
        .cent{
        margin-top: 150px;
        }
        @media screen and (min-width: 1305px) {
            .cent{
            margin-top: 210px;
            }
        }
        .botao4  {
    margin:0px;
    padding:0px;
}
.botao4 a {  
    font: bold 12px/24px 'Times New Roman', Times, serif;	
    padding:0px;
    text-decoration: none;
    text-align:center;	
    color: lavender;
    background: purple url('botao_link.gif')
    no-repeat center center;	
    width: 370px;  
    height: 28px;	
    display:block;
    border-radius: 2px;
    border-width: 2px;
    border-style:solid;
    border-color: purple;
    font-size: 25px;
}
.botao4 a:hover { 
    background: #fff url('botao_hover.gif') no-repeat 
    center center;
    color: purple;
    transition: 0.4s;
}
.botao5  {
    margin:0px;
    padding:0px;
}
.botao5 .a {  
    font: bold 12px/24px 'Times New Roman', Times, serif;	
    padding:0px;
    text-decoration: none;
    text-align:center;	
    color: lavender;
    background: linear-gradient(rgb(168, 2, 2), rgb(109, 2, 2)); url('botao_link.gif')
    no-repeat center center;	
    width: 20rem;  
    height: 2rem;
    display:block;
    border-radius: 20px;
    border-width: 2px;
    border-style:solid;
    border-color: rgb(109, 2, 2);
    font-size: 18px;
    box-shadow: rgb(49, 48, 48) 0px 2px 4px;
}
.botao5 .a:hover { 
    background: #fff url('botao_hover.gif') no-repeat 
    center center;
    color: rgb(109, 2, 2);
    transition: 0.4s;
}
        </style>
    </head>	
    <body>	
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#800000;">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://localhost/DealerTech/index.php"> <i class="fas fa-home"> </i> Home <span class="sr-only">(current)</span></a>
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
                <li class="nav-item">
                </li>
                <?php
                if(isset($_SESSION['usuarioNiveisAcessoId'])){
                $tipo = $_SESSION['usuarioNiveisAcessoId'];
                }else{
                    $tipo="";
                }
                if($tipo=="cliente"){
                ?>		
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px;"> <i class="fas fa-sign-out-alt"></i></a>
                    </li>	
                <?php
                }else if($tipo=="admin"){
                ?>	
                    <li class="nav-item active"> 
                        <a class="nav-link" href="http://localhost/DealerTech/admin/admin.php" title="Opções Administrativas" style="font-size: 25px;"> <i class="fas fa-tools"></i> </a> 
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px;"><i class="fas fa-sign-out-alt"></i></a>
                    </li>	
                <?php	
                }else{
                ?>
                    <li class="nav-item active"> 
                        <a class="nav-link" href="http://localhost/DealerTech/login.php" title="Fazer Login" style="font-size: 25px;"> <i class="fas fa-user-edit"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/DealerTech/cadastro.php" title="Fazer Cadastro" style="font-size: 25px;"><i class="fas fa-cog"></i></a>
                    </li>	
                <?php
                }
                ?>
              </ul>
              <form class="form-inline my-2 my-lg-0">
              </form>
            </div>
        </nav>
    </div>
    <center>
          
        <div style="margin-top:5rem;">
         <h2 style="font-size: 3rem;"> Fale Conosco </h2>
         <p class="botao">
            <a href="https://wa.me/5585981544074?text=Ol%C3%A1%20empresa%20Saga%20Veiculos%20De%20Luxo!" title=""> <i class="fab fa-whatsapp"></i>  WhatsApp: <br> <br> (88) 9619-2654 </a>
         </p> <br> <br> <br>
         <p class="botao2">
            <a href="https://sagaveiculosdeluxo@gmail.com" title=""> <i class="far fa-envelope"></i> E-mail: <br> <br> sagaveiculosdeluxo@gmail.com </a>
         </p> <br> <br> <br>
         <p class="botao3">
            <a href="tel:+5585981544074" title=""> <i class="fas fa-phone-alt"></i> Telefone: <br> <br> (88) 8109-5962 </a>
         </p> <br><br> <br>
         <p class="botao4">
            <a href="5585981544074" title=""> <i class="fab fa-instagram"></i> Instagram: <br> <br> @sagaveiculosdeluxo </a>
         </p> <br> <br> <br>
         <?php
            if($tipo=="cliente" || $tipo=="admin"){?>
                <p class="botao5">
                <button type="button" class="a" data-toggle="modal" data-target="#exampleModal2">Abrir Formulário de Contato</button>
                </p>
            <?php
            }else{?>
                <p class="botao5">
                <button type="button" class="a" data-toggle="modal" data-target="#exampleModal1">Abrir Formulário de Contato</button>
                </p>
            <?php
            }
            ?> 
         
        </div>
      </div>
    </center>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--modal 1-->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nova mensagem para @sagaveiculosdeluxo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="http://localhost/DealerTech/php/email_contato/form_cont.php">
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Messagem:</label>
                    <textarea class="form-control" id="message-text" name="mensagem"></textarea>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary" style="background-color:#800000;">Enviar Mensagem</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!--/modal-->
        <?php
            $red="a";
            if(isset($_SESSION['mensagem'])){
                $red = $_SESSION['mensagem'];
            }else{
                $red="";
            }
			if($red == "ok"){ ?>
			<script>
				$(document).ready(function(){
					$('#meuModal').modal('show');
				});
			</script>
			<?php 
            } 
            unset(
                $_SESSION['mensagem']
            );
            ?>
        <!-- Modal 2 -->
		<div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Mensagem para @sagaveiculosdeluxo</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Mensagem enviada com sucesso! Agradecemos pelo Contato!
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			</div>
			</div>
		</div>
		</div>
        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Falha ao Abrir Formulário</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				Você não está logado no sistema. Faça o login e depois retorne para abrir o formulário de contato.
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <a href="http://localhost/DealerTech/login.php">
					<button type="button" class="btn btn-primary" style="background-color:#800000;">Login</button>
				</a>
                <a href="http://localhost/DealerTech/cadastro.php">
					<button type="button" class="btn btn-primary" style="background-color:#800000;">Cadastro</button>
				</a>
			</div>
			</div>
		</div>
		</div>
        <!-- Modal 3 -->
        <!--Bootstrap-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
    </body>	
</html>