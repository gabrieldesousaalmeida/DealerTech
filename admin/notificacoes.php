<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notificações</title>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/personalizado.css">

        <script src="http://localhost/DealerTech/js/validform.js"></script>
        <script src="http://localhost/DealerTech/js/jquery-1.3.2-vsdoc2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
            <h3>Histórico de Notificações</h3>
            <button class="btn-sm btn-dark" data-toggle="modal" data-target="#modalExemplo">
                <?php
                $result_cursos = "SELECT COUNT(*) FROM notificacoes WHERE estado='não_lida'";
                $resultado_cursos = mysqli_query($conn, $result_cursos);
                while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
                    if($rows_cursos[0]!=0){
                ?>
                <i class="btn-lg fas fa-bell" style="color:red; margin-left:-12px;"></i>
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
                        <a href="http://localhost/DealerTech/admin/vendas.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'style="color:red;"></i> <span class="nav_name">Vendas</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_promocoes.php" style="color: white;text-decoration:none;" class="nav_link active"> <i class="fas fa-bell" style="color:red;"></i> <span class="nav_name">Notificações</span> </a>
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
                                <a style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                    <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                        <i class="fas fa-car-side"></i>
                                    </button>
                                </a>
                                <?php
                                }else if($rows_cursos['campo']=="Cadastro"){
                                ?>
                                <a style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                    <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                        <i class="fas fa-user"></i>
                                    </button>
                                </a>
                                <?php
                                }else if($rows_cursos['campo']=="evento"){
                                    ?>
                                    <a style='text-decoration: none; margin-right:10px;' class="float-right" href="">
                                        <button type="button" class="btn-sm btn-success" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura">
                                            <i class="fas fa-user"></i>
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
        <!-- Modal 3/ confirm ler todas-->
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ler Todas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Confirma a leitura de todas as notificações:
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <a style='text-decoration: none;' href="http://localhost/DealerTech/php/notificacoes/ler_todas.php">
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </a>
                </div>
                </div>
            </div>
        </div>
        <!-- FIM MODAIS-->
        <div class="alert alert-danger" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM notificacoes WHERE estado='não_lida'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-danger"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Notificações não lidas!</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter2" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura"><i class="fas fa-check-double"></i><b style="margin-left:4px;">Ler Todas</b></button>
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
                    <th scope="col">Notificações</th>
                    <th scope="col">Data-Hora</th>
                    <th scope="col">Período</th>
                    <th scope="col">Campo</th>
                    <th scope="col">
                        Lida
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM notificacoes WHERE estado='não_lida' ORDER BY id DESC;";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                    //Datas Atuais e registradas
                    $data_fim1_nao = date("Y/m/d");
                    $data_inicio_nao = new DateTime($rows_nota2['datas']);
                    $data_fim_nao = new DateTime($data_fim1_nao);

                    //Horas Atuais e registradas
                    $hora_inicial =$rows_nota2['hora'];
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
                    $dateInterval_nao = $data_inicio_nao->diff($data_fim_nao);
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['nota'];?></td>
                    <td><?php echo $rows_nota2['datas']." / ".$rows_nota2['hora'];?></td>
                    <td>
                        <?php
                            $diferença_nao = $dateInterval_nao->days; 
                            if ($diferença_nao==0){
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
                                echo $dateInterval_nao->days." dias atrás";
                            }
                        ?> 
                    </td>
                    <td><?php echo $rows_nota2['campo'];?></td>
                    <td>
                        <a style='text-decoration: none;' href=<?php echo "http://localhost/DealerTech/php/notificacoes/lida_not.php?id=".$rows_nota2['id'];?>>
                            <button type="button" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura"><i class="fas fa-check-double"></i></button>
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
            $result_cursos = "SELECT COUNT(*) FROM notificacoes WHERE estado='lida';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-primary"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Notificações lidas!</b>
            <div class="form-check float-right">
                <input class="form-check-input btn-lg" type="checkbox" onclick="marcarTodos(this.checked);" value="" id="flexCheckDefault">
                <center><b>Selecionar Todos</b></center>
            </div>
            <?php
            }
            ?>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Notificações</th>
                    <th scope="col">Data-Hora</th>
                    <th scope="col">Período</th>
                    <th scope="col">Campo</th>
                    <th scope="col">
                    <button data-toggle="modal" data-target="#exampleModalCenter3" class="btn-sm btn-outline-danger"><i class="fas fa-trash-alt"></i></button>
            <!--Deletar itens selecionado form-->
            <form name="del-car" method="POST" action="http://localhost/DealerTech/php/notificacoes/deletar_not.php">
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
                            Confirma que as notificações selecionadas serão deletadas
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
                $result_nota = "SELECT * FROM notificacoes WHERE estado='lida' ORDER BY id DESC;";
                $resultado_nota = mysqli_query($conn, $result_nota);
                $cont = 1;
                while ($rows_nota = mysqli_fetch_array($resultado_nota)) {
                    $id = $rows_nota['id'];
                    //Datas Atuais e registradas
                    $data_fim1_nota = date("Y/m/d");
                    $data_inicio_nota = new DateTime($rows_nota['datas']);
                    $data_fim_nota = new DateTime($data_fim1_nota);

                    //Horas Atuais e registradas
                    $hora_inicial =$rows_nota['hora'];
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
                            $h = $h+1;
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
                    $dateInterval_nota = $data_inicio_nota->diff($data_fim_nota);
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota['nota'];?></td>
                    <td><?php echo $rows_nota['datas']." / ".$rows_nota['hora'];?></td>
                    <td>
                        <?php
                            $diferença_nota = $dateInterval_nota->days; 
                            if ($diferença_nota==0){
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
                                echo $dateInterval_nota->days." dias atrás";
                            }
                        ?> 
                    </td>
                    <td><?php echo $rows_nota['campo'];?></td>
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
                ?>
            </form>
            </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
