<?php
session_start();
include_once("conexao.php");
?>
<html>
    <head>
        <title>Controle de Estoque</title>
        <link href="http://localhost/DealerTech/css/menu_lateral.css" rel="stylesheet">
        <link href="http://localhost/DealerTech/css/estoque.css" rel="stylesheet">
        <style>
            h2{
            margin-top: 35px;
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
            /* Edição da fonte*/
            color:red;
            font-family:'Times New Roman', Times, serif;
            -webkit-text-stroke-width: 0px;
            -webkit-text-stroke-color: #000;
            font-size: 40px;
            }
            #centro{
            display: inline-block;
            margin-left: auto;
            margin-right: auto;
            }
        #centro2{
            display: inline-block;
        }
        .oa{
            margin-left: 24%;
        }
        .sair{
            margin-left: 0%;
        }
        .sair1{
            margin-left: 28%;
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
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
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
    font-family: 'Times New Roman', Times, serif;
    color: #fff;

}
ul:hover li a{
    transform: scale(1.0);
    opacity: .5;
    filter: blur(1px);
}

ul li a:hover{
    transform: scale(2);
    opacity: 1;
    filter: blur(0);
}
.menu{
    background: linear-gradient(rgb(168, 2, 2), rgb(109, 2, 2));
    float: right;
    position: fixed; 
    top: 0%; 
    width:100%;
    height: 35px;
    box-shadow: rgb(49, 48, 48) 0px 3px 19px;
}
#esp{
    margin-left:30px;
}
        </style>
    </head>
    <body>
        <!--Menu Horizontal-->
        <div class="menu">
            <ul class=>
                <li> <a href="#" style="color: rgba(117, 2, 2, 0);"> </a></li> <!--Programação Orientada a Gambiarra-->
                <li> <a href="http://localhost/DealerTech/index.php" title="Página Inicial" class=> <i class="fas fa-home"> </i> Home </a></li>
                <li> <a href="http://localhost/DealerTech/comprar.php" title="Compre o seu carro de luxo"> <i class="fas fa-dollar-sign"> </i> Comprar </a></li>
                <li> <a href="http://localhost/DealerTech/carros.php" title="Conheça os veículos de luxo"> <i class="fas fa-car"></i> Carros </a></li>
                <li> <a href="http://localhost/DealerTech/contatos.php" title="Entre em Contato Conosco"> <i class="fas fa-phone-alt"></i> Contatos </a></li>
                <li> <a href="http://localhost/DealerTech/sobre.php" title="Conheça a Empresa Saga Veículos de Luxo"> <i class="fas fa-clipboard"></i> Sobre Nós </a></li>	
                <li id="centro2" class="sair1"><a href="http://localhost/DealerTech/php/login_usuario/sair.php" title="Sair" style="font-size: 25px; margin-top: 0px;"><i class="fas fa-sign-out-alt"></i></a></li>	
            </ul>
        </div>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
        <!--Menu Vertical-->
        <div id="lateral">
            <div id="menu">
                <ul class=>         				
                    <l class="lis"style="margin-left: 40%; width: 100%;"><a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title="" style="height:55px;"> Gerenciar Veículos<i class="fas fa-wrench" style="font-size: 25px;"></i></a></l><br>
                    <l class="lis"style=" width: 10%; height:10px;"><ls><i class="fas fa-wrench" style="font-size: 25px; margin-left:40px; "></i></ls></l>
                </ul>
                <br><br>
                <ul class=>         				
                    <l class="lis"style="margin-left: 40%; width: 100%;"><a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title=""> Gerenciar Veículos<i class="fas fa-wrench" style="font-size: 25px; "></i></a></l>
                    <l class="lis"style=" width: 10%; height:10px;"><ls><i class="fas fa-wrench" style="font-size: 25px; margin-left:40px; "></i></ls></l>
                </ul>
                <br><br>
                <ul class=>         				
                    <l class="lis"style="margin-left: 40%; width: 100%;"><a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title=""> Gerenciar Veículos<i class="fas fa-wrench" style="font-size: 25px; "></i> </a></l>
                    <l class="lis"style=" width: 10%; height:10px;"><ls><i class="fas fa-wrench" style="font-size: 25px; margin-left:40px; "></i></ls></l>  
                </ul>
                <br><br>
                <ul class=>         				
                    <l class="lis"style="margin-left: 40%; width: 100%;"><a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title=""> Gerenciar Veículos<i class="fas fa-wrench" style="font-size: 25px; "></i> </a></l>
                    <l class="lis"style=" width: 10%; height:10px;"><ls><i class="fas fa-wrench" style="font-size: 25px; margin-left:40px; "></i></ls></l>  
                </ul>
                <br><br>
                <ul class=>         				
                    <l class="lis"style="margin-left: 40%; width: 100%;"><a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title=""> Gerenciar Veículos<i class="fas fa-wrench" style="font-size: 25px; "></i> </a></l>
                    <l class="lis"style=" width: 10%; height:10px;"><ls><i class="fas fa-wrench" style="font-size: 25px; margin-left:40px; "></i></ls></l>  
                </ul>
                <br><br>
                <ul class=>         				
                    <l class="lis"style="margin-left: 40%; width: 100%;"><a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title=""> Gerenciar Veículos<i class="fas fa-wrench" style="font-size: 25px; "></i> </a></l>
                    <l class="lis"style=" width: 10%; height:10px;"><ls><i class="fas fa-wrench" style="font-size: 25px; margin-left:40px; "></i></ls></l>  
                </ul>
                <br><br>
                <ul class=>         				
                    <l class="lis"style="margin-left: 40%; width: 100%;"><a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" title=""> Gerenciar Veículos<i class="fas fa-wrench" style="font-size: 25px; "></i> </a></l>
                    <l class="lis"style=" width: 10%; height:10px;"><ls><i class="fas fa-wrench" style="font-size: 25px; margin-left:40px; "></i></ls></l>  
                </ul>
                <br><br>
                <br>
            <!-- mais seções -->
            </div> <!-- /#menu -->
        </div> <!-- /#lateral -->

        <!--Conteúdeo-->
        <h2>Controle de Estoque</h2>
        <a href="estoque.php" style="text-decoration:none;">
            <button id="retornar" style="text-decoration:none; margin-left:70px;">
				    <img src="http://localhost/DealerTech/Imagens/seta_esquerda.png" style="float: left; margin-right: 2%;"height="30"; width="30"; >
                    <h3 style="margin-top:0.5%;float: left;">VOLTAR PARA MARCAS<h3>
                    <h3 style="float: right;margin-top:-1%;">Volwvagen<h3>
            </button>
        </a>        
            
            
        <div class="bloco">
            <br>
			<div id="posição" class="bloco1">
				<h1>Pesquisar Usuário</h1>
			
                <form method="POST" action="">
                    <label>Nome: </label>
                    <input type="text" name="nome" placeholder="Digite o nome"><br><br>
                    <label>Email: </label>
                    <input type="email" name="email" placeholder="Digite o email"><br><br>
                    <input name="SendPesqUser" type="submit" value="Pesquisar">
                </form><br><br>

			</div>
            <div id=posição class="bloco2">
            <?php
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $result_usuarios = "SELECT * FROM clientes WHERE nome LIKE '%$nome%' AND email LIKE '%$email%'";
            $resultado_usuarios = mysqli_query($conn, $result_usuarios);
            while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
            ?>	
                <div id="card_cliente">
                    <div id="card_info">	
                        <?php
                            echo "<b>ID:</b> " . $row_usuario['id'] . "<br>";
                            echo "<b>Nome:</b> " . $row_usuario['nome'] . "<br>";
                            echo "<b>E-mail:</b> " . $row_usuario['email'] . "<br>";
                        ?>	
                    </div>
                        
                    <div id="card_info" class="card_button">
                            <button title="Alterar Dados do Usuário">
                            <?php
                                echo "<a style='text-decoration: none'; href='http://localhost/DealerTech/php/alterar_usuario/edit_usuario.php?id=". $row_usuario['id'] ."'>ALTERAR</a>";
                            ?>	
                            </button>
                            <BR><BR>
                            <button onclick="return deletar()" title="Deletar Usuário">
                            <?php	
                                echo "<a style='text-decoration: none'; href='http://localhost/DealerTech/php/deletar_usuario/proc_apagar_usuario.php?id=" . $row_usuario['id'] . "'>DELETAR</a>";
                            ?>
                            </button>		
                        </div>
                    </div>
			<?php
			}
			?>
                </div> 
            </div>
        </div>           
    </body>
</html>