<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Vendas</title>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/personalizado.css">

        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="http://localhost/DealerTech/js/validform.js"></script>
        <script src="http://localhost/DealerTech/js/jquery-1.3.2-vsdoc2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="js/personalizado.js"></script>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
        <!--Marcar checkbox's-->
        <script type="text/javascript">
            function marcarTodos(marcardesmarcar){
                $('.marcar').each(function () {
                    this.checked = marcardesmarcar;
                });
            }
            function marcarTodos2(marcardesmarcar){
                $('.marcar2').each(function () {
                    this.checked = marcardesmarcar;
                });
            }
        </script>
        <!--/Marcar checkbox's-->
        <style>@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

:root {
    --header-height: 3rem;
    --nav-width: 68px;
    --first-color: #4723D9;
    --first-color-light: #AFA5D9;
    --white-color: #F7F6FB;
    --body-font: 'Nunito', sans-serif;
    --normal-font-size: 1rem;
    --z-fixed: 100
}

*,
::before,
::after {
    box-sizing: border-box
}

body {
    position: relative;
    margin: var(--header-height) 0 0 0;
    padding: 0 1rem;
    font-family: var(--body-font);
    font-size: var(--normal-font-size);
    transition: .5s
}

a {
    text-decoration: none
}

.header {
    width: 100%;
    height: var(--header-height);
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 1rem;
    background-color: #FFFFFF;
    z-index: var(--z-fixed);
    transition: .5s
}

.header_toggle {
    color: black;
    font-size: 1.5rem;
    cursor: pointer
}

.header_img {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    overflow: hidden
}

.header_img img {
    width: 40px
}

.l-navbar {
    position: fixed;
    top: 0;
    left: -30%;
    width: var(--nav-width);
    height: 100vh;
    background-color:black;
    padding: .5rem 1rem 0 0;
    transition: .5s;
    z-index: var(--z-fixed)
}

.nav {
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden
}

.nav_logo,
.nav_link {
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: 1rem;
    padding: .5rem 0 .5rem 1.5rem
}

.nav_logo {
    margin-bottom: 2rem
}

.nav_logo-icon {
    font-size: 1.25rem;
    color: var(--white-color)
}

.nav_logo-name {
    color: var(--white-color);
    font-weight: 700
}

.nav_link {
    position: relative;
    color: var(--first-color-light);
    margin-bottom: 1.5rem;
    transition: .3s
}

.nav_link:hover {
    color: var(--white-color)
}

.nav_icon {
    font-size: 1.25rem
}

.show {
    left: 0
}

.body-pd {
    padding-left: calc(var(--nav-width) + 1rem)
}

.active {
    color: var(--white-color)
}

.active::before {
    content: '';
    position: absolute;
    left: 0;
    width: 2px;
    height: 32px;
    background-color: var(--white-color)
}

.height-100 {
    height: 100vh
}

@media screen and (min-width: 768px) {
    .esp{
        height: 40%;
    }
    body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
    }

    .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
    }

    .header_img {
        width: 40px;
        height: 40px
    }

    .header_img img {
        width: 45px
    }

    .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
    }

    .show1 {
        width: calc(var(--nav-width) + 156px)
    }

    .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
    }
    .dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}
}</style>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {

const showNavbar = (toggleId, navId, bodyId, headerId) =>{
const toggle = document.getElementById(toggleId),
nav = document.getElementById(navId),
bodypd = document.getElementById(bodyId),
headerpd = document.getElementById(headerId)

// Validate that all variables exist
if(toggle && nav && bodypd && headerpd){
toggle.addEventListener('click', ()=>{
// show navbar
nav.classList.toggle('show1')
// change icon
toggle.classList.toggle('bx-x')
// add padding to body
bodypd.classList.toggle('body-pd')
// add padding to header
headerpd.classList.toggle('body-pd')
})
}
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/*===== LINK ACTIVE =====*/
const linkColor = document.querySelectorAll('.nav_link')

function colorLink(){
if(linkColor){
linkColor.forEach(l=> l.classList.remove('active'))
this.classList.add('active')
}
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))

// Your code to run since DOM is loaded and ready
});
</script>
</head>
    <body oncontextmenu='return false' class='snippet-body'>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            <h3>Vendas</h3>
            <button class="btn-sm btn-dark" data-toggle="modal" data-target="#modalExemplo">
                <?php
                $result_cursos = "SELECT COUNT(*) FROM notificacoes WHERE estado='não_lida'";
                $resultado_cursos = mysqli_query($conn, $result_cursos);
                while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
                    if($rows_cursos[0]!=0){
                ?>
                <i class="btn-lg fas fa-bell" style="color:red; margin-left:-10px;"></i>
                <b style="color:red; margin-left:-13px;"><?php echo $rows_cursos[0];?></b>
                <?php
                    }else{
                        ?>
                <center><i class="btn-lg fas fa-bell" style="color:red;"></i></center>
                <?php
                    }
                }
                ?>
            </button>   
            <div class="header_img"> <img src="http://localhost/DealerTech/Imagens/felipe.jfif" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="http://localhost/DealerTech/index.php" class="nav_logo" style="color: white;text-decoration:none;"> <i class='fas fa-home'style="color:red;"></i> <span class="nav_logo-name">Home</span> </a>
                    <div class="nav_list"> 
                        <a href="http://localhost/DealerTech/admin/admin.php" style="color: white;text-decoration:none;" class="nav_link "> <i class='bx bx-grid-alt nav_icon' style="color:red;"></i> <span class="nav_name">Dashboard</span></a>
                        <a href="http://localhost/DealerTech/admin/estoque.php" style="color: white;text-decoration:none;"class="nav_link"> <i class='bx bx-folder nav_icon'style="color:red;"></i> <span class="nav_name">Estoque</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='fas fa-car'style="color:red;"></i> <span class="nav_name">Veículos</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_clientes.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-user nav_icon'style="color:red;"></i> <span class="nav_name">Usuários</span> </a>  
                        <a href="http://localhost/DealerTech/admin/eventos/eventos.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-bookmark nav_icon'style="color:red;"></i> <span class="nav_name">Eventos</span> </a>                         
                        <a href="http://localhost/DealerTech/admin/vendas.php" style="color: white;text-decoration:none;" class="nav_link active"> <i class='bx bx-bar-chart-alt-2 nav_icon'style="color:red;"></i> <span class="nav_name">Vendas</span> </a>
                        <a href="http://localhost/DealerTech/admin/notificacoes.php" style="color: white;text-decoration:none;" class="nav_link "> <i class="fas fa-bell" style="color:red;"></i> <span class="nav_name">Notificações</span> </a>
                        <div class="esp" style="height: 3rem;"></div>
                        <a href="http://localhost/DealerTech/php/login_usuario/sair.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-log-out nav_icon'style="color:red;"></i> <span class="nav_name">Sair</span> </a> 
                    </div>
                </div>
                <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            </nav>
        </div>
        <!-- Modal 1/ confirma delet-->
        <?php
            $red="a";
            if(isset($_SESSION['confirm'])){
                $red = $_SESSION['confirm'];
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
            if($red == "negativo"){ ?>
                <script>
                    $(document).ready(function(){
                        $('#meuModal5').modal('show');
                    });
                </script>
            <?php 
            }
            if($red == "realizada"){ ?>
                <script>
                    $(document).ready(function(){
                        $('#meuModal6').modal('show');
                    });
                </script>
            <?php 
            }  
            unset(
                $_SESSION['confirm']
            );
            ?>
		<div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="meuModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Exclusão Concluída</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                As notificações selecionadas foram deletadas
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>

        <!-- Modal 1.5/ delet-->
        <div class="modal fade" id="meuModal5" tabindex="-1" role="dialog" aria-labelledby="meuModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Falha na exclusão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Nenhum item foi selecionado!
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>
        <!-- Modal 3/ venda-->
        <div class="modal fade" id="meuModal6" tabindex="-1" role="dialog" aria-labelledby="meuModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Venda Realizada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Saída do veículo feita com sucesso!
            </div>
            <div class="modal-footer">
            </div>
            </div>
        </div>
        </div>
        <!-- Modal 2/ Notificações-->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Novas Notificações</h5>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="http://localhost/DealerTech/admin/notificacoes.php">
                        <button type="submit" class="btn btn-primary">
                            Abrir Todas
                        </button>
                    </a>    
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="list-group">
                
                <?php
                $result_cursos = "SELECT * FROM notificacoes WHERE estado='não_lida' ORDER BY id DESC;";
                $resultado_cursos = mysqli_query($conn, $result_cursos);
                while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
                    //Modo de receber hora e data
                    date_default_timezone_set("America/New_York");

                    //Datas Atuais e registradas
                    $data_fim1 = date("Y/m/d");
                    $data_inicio = new DateTime($rows_cursos['datas']);
                    $data_fim = new DateTime($data_fim1);

                    //Horas Atuais e registradas
                    $hora_inicial =$rows_cursos['hora'];
                    $hora2 = date("H:i:sa");
                    list($h, $m, $s) = explode(':', $hora2);
                    $hora1 = $h+1;
                    $hora_final = ($hora1.":".$m.":".$s);

                        $i = 1;
                        $tempo_total;
                        
                        $tempos = array($hora_final, $hora_inicial);
                        
                        foreach($tempos as $tempo) {
                            $segundos = 0;
                            
                            list($h, $m, $s) = explode(':', $tempo);
                            $segundos += $h * 3600;
                            $segundos += $m * 60;
                            
                            $tempo_total[$i] = $segundos;
                            
                            $i++;
                        }
                        $segundos = $tempo_total[1] - $tempo_total[2];
            
                        $horas = floor($segundos / 3600);
                        $segundos -= $horas * 3600;
                        $minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
                        $segundos -= $minutos * 60;
                        $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);

                    // Resgata diferença entre as datas
                    $dateInterval = $data_inicio->diff($data_fim);
                ?>
                    <c href="#" class="border list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1"><?php echo $rows_cursos['title'];?></h5>
                        <small>
                            <?php
                            $diferença = $dateInterval->days; 
                            if ($diferença==0){
                                if($horas==0){
                                    if($minutos==0){
                                        echo "há alguns segundos atrás";
                                    }else{
                                    echo "$minutos minutos atrás";
                                    }
                                }else{
                                    echo "$horas horas atrás";
                                }
                            }else{
                                echo $dateInterval->days." dias atrás";
                            }
                        ?> 
                        </small>
                        </div>
                        <p class="mb-1"><?php echo $rows_cursos['nota'];?></p>
                        <small><?php echo $rows_cursos['campo'];?></small>
                        <a style='text-decoration: none;' href=<?php echo "http://localhost/DealerTech/php/notificacoes/lida_not.php?id=".$rows_cursos['id'];?>>
                            <button type="button" class="btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                <i class="fas fa-check-double"></i>
                            </button>
                        </a>
                        <?php
                                if($rows_cursos['campo']=="comentarios"){
                                ?>
                                <a style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                    <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                        <i class="fas fa-comments"></i>
                                    </button>
                                </a>   
                                <?php
                                }else if($rows_cursos['campo']=="Carros"){
                                ?>
                                <a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                    <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                        <i class="fas fa-car-side"></i>
                                    </button>
                                </a>
                                <?php
                                }else if($rows_cursos['campo']=="Cadastro"){
                                ?>
                                <a href="http://localhost/DealerTech/admin/gerenciar_clientes.php" style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                    <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                        <i class="fas fa-user"></i>
                                    </button>
                                </a>
                                <?php
                                }else if($rows_cursos['campo']=="evento"){
                                    ?>
                                    <a href="http://localhost/DealerTech/admin/eventos/eventos.php" style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                        <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                            <i class="fas fa-user"></i>
                                        </button>
                                    </a>
                                    <?php
                                }else if($rows_cursos['campo']=="Vendas"){
                                    ?>
                                    <a href="http://localhost/DealerTech/admin/vendas.php" style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                        <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Ir para Vendas">
                                            <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                                        </button>
                                    </a>
                                    <?php
                                }else{
                                ?>
                                <?php
                                }
                            ?>
                        </a>
                    </c>
                <?php
                }
                ?>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- FIM MODAIS-->
        <div id="accordion1">
        <div class="card">
            <div class="card-header" id="headingtesteOne">
            <h5 class="mb-0">
                <button class="btn btn-link" style="text-decoration: none;" data-toggle="collapse" data-target="#collapsetesteOne" aria-expanded="true" aria-controls="collapsetesteOne">
                Gráficos/ Status de Vendas
                </button>
            </h5>
            </div>

            <div id="collapsetesteOne" class="collapse" aria-labelledby="headingtesteOne" data-parent="#accordion1">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
            </div>
        </div>
        </div>
        <br>
        <div class="alert alert-danger" role="alert">
            <?php
            //Fuction Preço
            function inteiro_decimal_br($numero){
                $numero = number_format($numero, 2, ',', '.');
                return $numero;
            }
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='em_andamento'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-danger"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Vendas em Andamento</b>
            <div class="float-right">
                <button type="button" onclick="location.href='https://meet.google.com/sff-ddis-vhm'" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Reunião para Vendas"><i class="fas fa-external-link-square-alt"></i><b style="margin-left:4px;">Ir para Videoconferência</b></button>
            </div>
            <?php
            $qtde=$rows_cursos[0];
            }
            ?>
        </div>
        <?php
        if($qtde!=0){
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Veículo</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Reunião</th>
                    <th scope="col">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM vendas WHERE estado='em_andamento' ORDER BY id DESC;";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                    //Preço
                    $preço = $rows_nota2['preço'];
                    $valor_tela = inteiro_decimal_br($preço);
                    
                    //Datas Atuais e registradas
                    $data_fim1_nao = date("Y/m/d");
                    $data_inicio_nao = new DateTime($rows_nota2['data_compra']);
                    $data_fim_nao = new DateTime($data_fim1_nao);

                    //Horas Atuais e registradas
                    $hora_inicial =$rows_nota2['hora_compra'];
                    $hora2 = date("H:i:sa");
                    list($h, $m, $s) = explode(':', $hora2);
                    $hora1 = $h+1;
                    $hora_final = ($hora1.":".$m.":".$s);

                        $i = 1;
                        $tempo_total;
                        
                        $tempos = array($hora_inicial, $hora_final);
                        
                        foreach($tempos as $tempo) {
                            $segundos = 0;
                            
                            list($h, $m, $s) = explode(':', $tempo);
                            $segundos += $h * 3600;
                            $segundos += $m * 60;
                            
                            $tempo_total[$i] = $segundos;
                            
                            $i++;
                        }
                        $segundos = $tempo_total[1] - $tempo_total[2];
            
                        $horas = floor($segundos / 3600);
                        $segundos -= $horas * 3600;
                        $minutos = str_pad((floor($segundos / 60)), 2, '0', STR_PAD_LEFT);
                        $segundos -= $minutos * 60;
                        $segundos = str_pad($segundos, 2, '0', STR_PAD_LEFT);

                    // Resgata diferença entre as datas
                    $dateInterval_nao = $data_fim_nao->diff($data_inicio_nao);
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['nome'];?></td>
                    
                    <!-- Modal 2 / Dados-->
                    <div class="modal fade" id="myModal<?php echo $rows_nota2['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
                                    <h4 class="modal-title text-center" id="myModalLabel">Ver Mais do Cliente <?php echo $cont;?></h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									
								</div>
								<div class="modal-body">
                                    <div id="accordion2">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" style="text-decoration: none;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Cliente
                                                </button>
                                            </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion2">
                                            <div class="card-body">
                                                <b>Nome: </b><p><?php echo $rows_nota2['nome']; ?></p>
                                                <b>Email: </b><p><?php echo $rows_nota2['email']; ?></p>
                                                <b>Telefone: </b><p><?php echo $rows_nota2['telefone']; ?></p>
                                                <b>CPF: </b><p><?php echo $rows_nota2['CPF']; ?></p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" style="text-decoration: none;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Veículo
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion2">
                                            <div class="card-body">
                                                <b>Marca: </b><p><?php echo $rows_nota2['marca']; ?></p>
                                                <b>Modelo: </b><p><?php echo $rows_nota2['modelo']; ?></p>
                                                <b>Versão: </b><p><?php echo $rows_nota2['versao']; ?></p>
                                                <b>Preço: </b><p><?php echo $valor_tela; ?></p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" style="text-decoration: none;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Evento
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion2">
                                            <div class="card-body">
                                            <?php
                                            $evento_cod = $rows_nota2['evento_cod'];
                                            $result_nota3 = "SELECT * FROM events WHERE evento_cod='$evento_cod'";
                                            $resultado_nota3 = mysqli_query($conn, $result_nota3);
                                            while($rows_nota = mysqli_fetch_array($resultado_nota3)) {?>
                                            <b>Título: </b><p><?php echo $rows_nota['title']; ?></p>
                                            <b>Começo: </b><p><?php echo $rows_nota['start']; ?></p>
                                            <b>Fim: </b><p><?php echo $rows_nota['end']; ?></p>
                                            <?php
                                            }?>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
					</div>
                    <td><?php echo $rows_nota2['marca']." ".$rows_nota2['modelo']." ".$rows_nota2['versao'];?></td>
                    <td><?php echo $valor_tela;?></td>
                    <td>
                        <?php
                            $diferença_nao = $dateInterval_nao->days; 
                            if ($diferença_nao==0){
                                if($horas<=0){
                                    if($minutos<=0){
                                        echo "Daqui há alguns segundos";
                                    }else{
                                        echo "Daqui há $minutos minutos";
                                    }
                                }else{
                                    echo "Daqui há $horas horas";
                                }
                            }else{
                                echo "Daqui há $dateInterval_nao->days dias";
                            }
                        ?> 
                    </td>
                    <td>
                        <a style='text-decoration: none;'>
                            <button type="button" class="btn-sm btn-warning" title="Ver mais da Venda" data-toggle="modal" data-target="#myModal<?php echo $rows_nota2['id']; ?>"><i class="fas fa-street-view"></i> Ver mais</button>
                        </a>
                        <a style='text-decoration: none;' href=<?php echo "http://localhost/DealerTech/php/vendas/lida_not.php?id=".$rows_nota2['id'];?>>
                            <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Venda"><i class="fas fa-check"></i></button>
                        </a>
                        <a style='text-decoration: none;' href=<?php echo "http://localhost/DealerTech/php/vendas/lida_neg.php?id=".$rows_nota2['id'];?>>
                            <button type="button" class="btn-sm btn-danger" data-toggle="tooltip" data-placement="right" title="Negar Venda"><i class="fas fa-times"></i></button>
                        </a>
                    </td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </tbody>
        </table>
        <div class="alert alert-primary" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-primary"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Vendas Realizadas</b>
            <div class="form-check float-right">
                <input class="form-check-input btn-lg" type="checkbox" onclick="marcarTodos(this.checked);" value="" id="flexCheckDefault">
                <center><b>Selecionar Todos</b></center>
            </div>
            <?php
            $qtde = $rows_cursos[0];
            }
            ?>
        </div>
        <?php
        if($qtde!=0){
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Veículo</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data</th>
                    <th scope="col">
                        Ações
                    </th>
                    <th scope="col">
                    <button data-toggle="modal" data-target="#exampleModalCenter3" class="btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                </tr>
                <?php
                $result_nota = "SELECT * FROM vendas WHERE estado='realizada'";
                $resultado_nota = mysqli_query($conn, $result_nota);
                $cont = 1;
                while ($rows_nota5 = mysqli_fetch_array($resultado_nota)) {
                    $preço = $rows_nota5['preço'];
                    $valor_tela = inteiro_decimal_br($preço);
                ?>
                <!-- Modal 2 / Dados-->
                <div class="modal fade" id="mysModal<?php echo $rows_nota5['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center" id="myModalLabel">Ver Mais do Cliente <?php echo $cont;?></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>    
                            </div>
                            <div class="modal-body">
                                <div id="accordion3">
                                    <div class="card">
                                        <div class="card-header" id="headingteste">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" style="text-decoration: none;" data-toggle="collapse" data-target="#collapseteste" aria-expanded="true" aria-controls="collapseteste">
                                                Cliente
                                                </button>
                                            </h5>
                                        </div>

                                        <div id="collapseteste" class="collapse show" aria-labelledby="headingteste" data-parent="#accordion3">
                                            <div class="card-body">
                                                <b>Nome: </b><p><?php echo $rows_nota5['nome']; ?></p>
                                                <b>Email: </b><p><?php echo $rows_nota5['email']; ?></p>
                                                <b>Telefone: </b><p><?php echo $rows_nota5['telefone']; ?></p>
                                                <b>CPF: </b><p><?php echo $rows_nota5['CPF']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingtesteTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" style="text-decoration: none;" data-toggle="collapse" data-target="#collapsetesteTwo" aria-expanded="false" aria-controls="collapsetesteTwo">
                                                Veículo
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsetesteTwo" class="collapse" aria-labelledby="headingtesteTwo" data-parent="#accordion3">
                                            <div class="card-body">
                                                <b>Marca: </b><p><?php echo $rows_nota5['marca']; ?></p>
                                                <b>Modelo: </b><p><?php echo $rows_nota5['modelo']; ?></p>
                                                <b>Versão: </b><p><?php echo $rows_nota5['versao']; ?></p>
                                                <b>Preço: </b><p><?php echo $valor_tela; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingtesteThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" style="text-decoration: none;" data-toggle="collapse" data-target="#collapsetesteThree" aria-expanded="false" aria-controls="collapsetesteThree">
                                                Evento
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsetesteThree" class="collapse" aria-labelledby="headingtesteThree" data-parent="#accordion3">
                                            <div class="card-body">
                                                <?php
                                                $evento_cod = $rows_nota5['evento_cod'];
                                                $result_nota3 = "SELECT * FROM events WHERE evento_cod='$evento_cod' ORDER BY id DESC;";
                                                $resultado_nota3 = mysqli_query($conn, $result_nota3);
                                                while ($rows_nota3 = mysqli_fetch_array($resultado_nota3)) {?>
                                                <b>Título: </b><p><?php echo $rows_nota3['title']; ?></p>
                                                <b>Começo: </b><p><?php echo $rows_nota3['start']; ?></p>
                                                <b>Fim: </b><p><?php echo $rows_nota3['end']; ?></p>
                                                <?php
                                                }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            <form name="del-car" method="POST" action="http://localhost/DealerTech/php/vendas/deletar_not.php">
            <!-- Modal 4/ confirm delet-->
                <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Deletar Notificações</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Confirma que as vendas selecionadas serão deletadas
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                        </div>
                    </div>
                </div>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota5 = "SELECT * FROM vendas WHERE estado='realizada' ORDER BY id DESC;";
                $resultado_nota5 = mysqli_query($conn, $result_nota5);
                $cont = 1;
                while ($rows_nota5 = mysqli_fetch_array($resultado_nota5)) {
                    $id = $rows_nota5['id'];
                    $preço = $rows_nota5['preço'];
                    $valor_tela = inteiro_decimal_br($preço);
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota5['nome'];?></td>
                    <td><?php echo $rows_nota5['marca']." ".$rows_nota5['modelo']." ".$rows_nota5['versao'];?></td>
                    <td><?php echo $valor_tela;?></td>
                    <td><?php echo $rows_nota5['data_compra'];?></td>
                    <td>
                        <a style='text-decoration: none;'>
                            <button type="button" class="btn-sm btn-warning" title="Ver mais da Venda" data-toggle="modal" data-target="#mysModal<?php echo $rows_nota5['id']; ?>"><i class="fas fa-street-view"></i> Ver mais</button>
                        </a>
                    </td>
                    <td>
                    <center>
                        <div class="form-check align-items-center" >
                            <input class="form-check-input btn-lg marcar" name=<?php echo "id[$id]"?> type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </center>    
                    </td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </form>
            </tbody>
        </table>
        <div class="alert alert-secondary" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='negada';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-secondary"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Vendas Negadas</b>
            <div class="form-check float-right">
                <input class="form-check-input btn-lg" type="checkbox" onclick="marcarTodos2(this.checked);" value="" id="flexCheckDefault">
                <center><b>Selecionar Todos</b></center>
            </div>
            <?php
            $qtde = $rows_cursos[0];
            }
            ?>
        </div>
        <?php
        if($qtde!=0){
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Veículo</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Data</th>
                    <th scope="col">
                        Ações
                    </th>
                    <th scope="col">
                    <button data-toggle="modal" data-target="#exampleModalCenter4" class="btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
                </tr>
                <?php
                $result_nota = "SELECT * FROM vendas WHERE estado='negada' ORDER BY id DESC;";
                $resultado_nota = mysqli_query($conn, $result_nota);
                $cont = 1;
                while ($rows_nota = mysqli_fetch_array($resultado_nota)) {
                    $preço = $rows_nota['preço'];
                    $valor_tela = inteiro_decimal_br($preço);
                ?>
                <!-- Modal 2 / Dados-->
                    <div class="modal fade" id="myseModal<?php echo $rows_nota['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title text-center" id="myModalLabel">Ver Mais do Cliente <?php echo $cont;?></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        
                                </div>
                                <div class="modal-body">
                                    <div id="accordion">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" style="text-decoration: none;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Cliente
                                                </button>
                                            </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <b>Nome: </b><p><?php echo $rows_nota['nome']; ?></p>
                                                <b>Email: </b><p><?php echo $rows_nota['email']; ?></p>
                                                <b>Telefone: </b><p><?php echo $rows_nota['telefone']; ?></p>
                                                <b>CPF: </b><p><?php echo $rows_nota['CPF']; ?></p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" style="text-decoration: none;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Veículo
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <b>Marca: </b><p><?php echo $rows_nota['marca']; ?></p>
                                                <b>Modelo: </b><p><?php echo $rows_nota['modelo']; ?></p>
                                                <b>Versão: </b><p><?php echo $rows_nota['versao']; ?></p>
                                                <b>Preço: </b><p><?php echo $valor_tela; ?></p>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" style="text-decoration: none;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Evento
                                                </button>
                                            </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                <?php
                                                $evento_cod = $rows_nota['evento_cod'];
                                                $result_nota3 = "SELECT * FROM events WHERE evento_cod='$evento_cod' ORDER BY id DESC;";
                                                $resultado_nota3 = mysqli_query($conn, $result_nota3);
                                                while ($rows_nota3 = mysqli_fetch_array($resultado_nota3)) {?>
                                                <b>Título: </b><p><?php echo $rows_nota3['title']; ?></p>
                                                <b>Começo: </b><p><?php echo $rows_nota3['start']; ?></p>
                                                <b>Fim: </b><p><?php echo $rows_nota3['end']; ?></p>
                                                <?php
                                                }?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }?>
            <form name="del-car" method="POST" action="http://localhost/DealerTech/php/vendas/deletar_not.php">
            <!-- Modal 4/ confirm delet-->
                <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Deletar vendas</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Confirma que as vendas selecionadas serão deletadas
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </div>
                        </div>
                    </div>
                </div>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota = "SELECT * FROM vendas WHERE estado='negada' ORDER BY id DESC;";
                $resultado_nota = mysqli_query($conn, $result_nota);
                $cont = 1;
                while ($rows_nota = mysqli_fetch_array($resultado_nota)) {
                    $id = $rows_nota['id'];
                    $preço = $rows_nota['preço'];
                    $valor_tela = inteiro_decimal_br($preço);
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota['nome'];?></td>
                    <td><?php echo $rows_nota['marca']." ".$rows_nota['modelo']." ".$rows_nota['versao'];?></td>
                    <td><?php echo $valor_tela;?></td>
                    <td><?php echo $rows_nota['data_compra'];?></td>
                    <td>
                        <a style='text-decoration: none;'>
                            <button type="button" class="btn-sm btn-warning" title="Ver mais da Venda" data-toggle="modal" data-target="#myseModal<?php echo $rows_nota['id']; ?>"><i class="fas fa-street-view"></i> Ver mais</button>
                        </a>
                    </td>
                    <td>
                    <center>
                        <div class="form-check align-items-center" >
                            <input class="form-check-input btn-lg marcar2" name=<?php echo "id[$id];"?> title=<?php echo "id[$id];"?> type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </center>    
                    </td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </form>
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
