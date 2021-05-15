<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastro</title>
        <script type="text/javascript" src="http://localhost/DealerTech/js/validform.js"></script>
    </head>
    <body>
        <center>  
        <h1>Cadastrar Veículo</h1>    
        <form class="form" name="dados" method="POST" action="http://localhost/DealerTech/php/cadastro_veiculo/salva_mensagem.php"> 
            <label for="" class="label-input icon-modify">
                Modelo:
                <input type="text" name="modelo" placeholder="modelo" style="box-shadow: 0 0 0 0;outline: 0;">
            </label>
            <br><br>
            <label for="" class="label-input icon-modify">
                Chassi:
                <input type="text" name="chassi" placeholder="chassi" style="box-shadow: 0 0 0 0;outline: 0;">
            </label>
            <br><br>
            <label for="" class="label-input icon-modify">
                fabricante:
                <input type="text" name="fabricante" placeholder="fabricante" style="box-shadow: 0 0 0 0;outline: 0;">
            </label>
            <br><br>
            <label for="" class="label-input icon-modify">
                Ano:
                <input type="date" name="ano" placeholder="data" style="box-shadow: 0 0 0 0;outline: 0;">
            </label>
            <br><br>
            <label for="" class="label-input icon-modify">
                Marca:
                <input type="text" name="marca" placeholder="marca" style="box-shadow: 0 0 0 0;outline: 0;">
            </label>
            <br><br>
            <label for="" class="label-input icon-modify">
                Cor:
                <input type="text" name="cor" placeholder="cor" style="box-shadow: 0 0 0 0;outline: 0;">
            </label><br><br>
            <input type="submit" value="Cadastrar Veículo" onclick="return cad_vei()"><br><br>
            <button title="Ir para Gerenciar Carros">
                <a href="http://localhost/DealerTech/gerenciar_veiculos.php">Retornar</a>
            </button>
            <button title="Ir para Opções Administrativas">
                <a href="admin.html">Admin</a>
            </button>
            <button title="Página Inicial">
                <a href="index.html">Menu Inicial</a>
            </button>
            <?php
            if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
            ?>
            <h2> Imagem salva com sucesso!</h2>
            <?php    
			}
            ?>
            <br> 
        </form>    
        </center>  
    </body>
</html>