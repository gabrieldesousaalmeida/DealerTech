<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Estoque</title>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/personalizado.css">

        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">

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
            <h3>Estoque</h3>
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
                        <a href="http://localhost/DealerTech/admin/estoque.php" style="color: white;text-decoration:none;"class="nav_link active"> <i class='bx bx-folder nav_icon'style="color:red;"></i> <span class="nav_name">Estoque</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='fas fa-car'style="color:red;"></i> <span class="nav_name">Veículos</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_clientes.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-user nav_icon'style="color:red;"></i> <span class="nav_name">Usuários</span> </a>  
                        <a href="http://localhost/DealerTech/admin/eventos/eventos.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-bookmark nav_icon'style="color:red;"></i> <span class="nav_name">Eventos</span> </a>                         
                        <a href="http://localhost/DealerTech/admin/vendas.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'style="color:red;"></i> <span class="nav_name">Vendas</span> </a>
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
            if(isset($_SESSION['msg'])){
                $red = $_SESSION['msg'];
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
                $_SESSION['msg']
            );
            ?>
		<div class="modal fade" id="meuModal" tabindex="-1" role="dialog" aria-labelledby="meuModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Entrada Concluída</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                A quantidade adicionada foi registrada!
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

        <!-- Modal Entrada estoque-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada de Veículos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/DealerTech/php/estoque/entrada.php">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Informe a quantidade de linhas:</label>
                    <input type="number" class="form-control" name="linhas" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Entrada BMW-->
        <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada de Veículos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/DealerTech/php/estoque/entrada_BMW.php">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Informe a quantidade de linhas:</label>
                    <input type="number" class="form-control" name="linhas" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div>    
        <!-- Modal Entrada Chevrolet-->
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada de Veículos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/DealerTech/php/estoque/entrada_Chevrolet.php">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Informe a quantidade de linhas:</label>
                    <input type="number" class="form-control" name="linhas" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div> 
        <!-- Modal Entrada Ferrari-->
        <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada de Veículos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/DealerTech/php/estoque/entrada_Ferrari.php">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Informe a quantidade de linhas:</label>
                    <input type="number" class="form-control" name="linhas" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Entrada Lamburguine-->
        <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada de Veículos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/DealerTech/php/estoque/entrada_Lamburguine.php">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Informe a quantidade de linhas:</label>
                    <input type="number" class="form-control" name="linhas" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Entrada Mercedes-->
        <div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada de Veículos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/DealerTech/php/estoque/entrada_Mercedes.php">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Informe a quantidade de linhas:</label>
                    <input type="number" class="form-control" name="linhas" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- Modal Entrada Porsche-->
        <div class="modal fade" id="exampleModalCenter6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrada de Veículos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="http://localhost/DealerTech/php/estoque/entrada_Porsche.php">
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Informe a quantidade de linhas:</label>
                    <input type="number" class="form-control" name="linhas" id="recipient-name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        <!-- FIM MODAIS-->
        <div id="list-example" class="list-group">
            <a class="list-group-item list-group-item-action" href="#list-item-1">Estoque total</a>
            <a class="list-group-item list-group-item-action " href="#list-item-2">BMW</a>
            <a class="list-group-item list-group-item-action" href="#list-item-3">Chevrolet</a>
            <a class="list-group-item list-group-item-action" href="#list-item-4">Ferrari</a>
            <a class="list-group-item list-group-item-action" href="#list-item-5">Lamburguine</a>
            <a class="list-group-item list-group-item-action" href="#list-item-6">Mercedes</a>
            <a class="list-group-item list-group-item-action" href="#list-item-7">Porsche</a>
        </div>
        <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <br>
            <h4 id="list-item-1"></h4>
            <p>
        </div>
        <div class="alert alert-danger" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-danger"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Estoque total</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Receber Novos veículos"><i class="fas fa-network-wired"></i><b style="margin-left:4px;">Entrada de Veículos</b></button>
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
                    <th scope="col">BMW</th>
                    <th scope="col">Chevrolet</th>
                    <th scope="col">Ferrari</th>
                    <th scope="col">Lamburguine</th>
                    <th scope="col">Mercedes</th>
                    <th scope="col">Porsche</th>
                    <th scope="col">qtde_total</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $result_cursos = "SELECT SUM(qtde) as soma_BMW FROM veiculos WHERE marca ='BMW'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
            ?>
                <tr>
                    <td>
                        <?php 
                        echo $rows_cursos[0];
                        $BMW = $rows_cursos[0];
                        ?>
                    </td>
                    <?php
            }?>
                    <td>
                    <?php
                    $result_cursos1 = "SELECT SUM(qtde) as soma_Chevrolet FROM veiculos WHERE marca ='Chevrolet'";
                    $resultado_cursos1 = mysqli_query($conn, $result_cursos1);
                    while ($rows_cursos1 = mysqli_fetch_array($resultado_cursos1)){
                        echo $rows_cursos1[0];
                        $Chevrolet = $rows_cursos1[0];
                    }    
                    ?>
                    </td>
                    <td>
                    <?php
                    $result_cursos1 = "SELECT SUM(qtde) as soma_Ferrari FROM veiculos WHERE marca ='Ferrari'";
                    $resultado_cursos1 = mysqli_query($conn, $result_cursos1);
                    while ($rows_cursos2 = mysqli_fetch_array($resultado_cursos1)){
                        echo $rows_cursos2[0];
                        $Ferrari = $rows_cursos2[0];
                    }
                    ?>
                    </td>
                    <td>
                    <?php
                    $result_cursos1 = "SELECT SUM(qtde) as soma_Lamborghini FROM veiculos WHERE marca ='Lamborghini'";
                    $resultado_cursos1 = mysqli_query($conn, $result_cursos1);
                    while ($rows_cursos3 = mysqli_fetch_array($resultado_cursos1)){
                        echo $rows_cursos3[0];
                        $Lamburguine = $rows_cursos3[0];
                    }
                    ?>
                    </td>
                    <td>
                    <?php
                    $result_cursos1 = "SELECT SUM(qtde) as soma_Mercedes FROM veiculos WHERE marca ='Mercedes'";
                    $resultado_cursos1 = mysqli_query($conn, $result_cursos1);
                    while ($rows_cursos4 = mysqli_fetch_array($resultado_cursos1)){
                        echo $rows_cursos4[0];
                        $Mercedes = $rows_cursos4[0];
                    }
                    ?>
                    </td>
                    <td>
                    <?php
                    $result_cursos1 = "SELECT SUM(qtde) as soma_Porsche FROM veiculos WHERE marca ='Porsche'";
                    $resultado_cursos1 = mysqli_query($conn, $result_cursos1);
                    while ($rows_cursos5 = mysqli_fetch_array($resultado_cursos1)){
                        echo $rows_cursos5[0];
                        $Porsche = $rows_cursos5[0];
                    }
                    ?>
                    </td>
                    <td>
                    <?php
                    $soma_marcas = $BMW+$Chevrolet+$Ferrari+$Lamburguine+$Mercedes+$Porsche;
                    echo $soma_marcas;
                    ?>
                    </td>
                </tr>
                <?php
        }
                ?>
            </tbody>
        </table>
            </p>
            <h4 id="list-item-2"></h4>
            <p>
            <div class="alert alert-success" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='BMW'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-success"><b><?php echo $rows_cursos[0];?></b></button>
            <b>BMW</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter1" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura"><i class="fas fa-network-wired"></i><b style="margin-left:4px;">Entrada de Veículos BMW</b></button>
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
                    <th scope="col">Modelo</th>
                    <th scope="col">Qtde</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM veiculos WHERE marca='BMW';";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['modelo'];?></td>
                    <td><?php echo $rows_nota2['qtde'];?></td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </tbody>
        </table>
            </p>
            <h4 id="list-item-3"></h4>
            <p>
            <div class="alert alert-success" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Chevrolet'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-success"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Chevrolet</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter2" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura"><i class="fas fa-network-wired"></i><b style="margin-left:4px;">Entrada de Veículos Chevrolet</b></button>
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
                    <th scope="col">Modelo</th>
                    <th scope="col">Qtde</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM veiculos WHERE marca='Chevrolet';";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['modelo'];?></td>
                    <td><?php echo $rows_nota2['qtde'];?></td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </tbody>
        </table>
        </p>
            <h4 id="list-item-4"></h4>
            <p>
            <div class="alert alert-success" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Ferrari'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-success"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Ferrari</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter3" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura"><i class="fas fa-network-wired"></i><b style="margin-left:4px;">Entrada de Veículos Ferrari</b></button>
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
                    <th scope="col">Modelo</th>
                    <th scope="col">Qtde</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM veiculos WHERE marca='Ferrari';";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['modelo'];?></td>
                    <td><?php echo $rows_nota2['qtde'];?></td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </tbody>
        </table>
            </p>
            <h4 id="list-item-5"></h4>
            <p>
            <div class="alert alert-success" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Lamborghini'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-success"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Lamborghini</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter4" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right"><i class="fas fa-network-wired"></i><b style="margin-left:4px;">Entrada de Veículos Lamborghini</b></button>
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
                    <th scope="col">Modelo</th>
                    <th scope="col">Qtde</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM veiculos WHERE marca='Lamborghini';";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['modelo'];?></td>
                    <td><?php echo $rows_nota2['qtde'];?></td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </tbody>
        </table>
            </p>
            <h4 id="list-item-6"></h4>
            <p>
            <div class="alert alert-success" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Mercedes'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-success"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Mercedes</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter5" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura"><i class="fas fa-network-wired"></i><b style="margin-left:4px;">Entrada de Veículos Mercedes</button>
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
                    <th scope="col">Modelo</th>
                    <th scope="col">Qtde</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM veiculos WHERE marca='Mercedes';";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['modelo'];?></td>
                    <td><?php echo $rows_nota2['qtde'];?></td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </tbody>
        </table>
            </p>
            <h4 id="list-item-7"></h4>
            <p>
            <div class="alert alert-success" role="alert">
            <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Porsche'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            ?>
            <button type="button" class="btn-sm btn-outline-success"><b><?php echo $rows_cursos[0];?></b></button>
            <b>Porsche</b>
            <div class="float-right">
                <button type="button" data-toggle="modal" data-target="#exampleModalCenter6" class="btn-sm btn-primary" data-toggle="tooltip" data-placement="right" title="Confirmar Leitura"><i class="fas fa-network-wired"></i><b style="margin-left:4px;">Entrada de Veículos Porsche</b></button>
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
                    <th scope="col">Modelo</th>
                    <th scope="col">Qtde</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $result_nota2 = "SELECT * FROM veiculos WHERE marca='Porsche';";
                $resultado_nota2 = mysqli_query($conn, $result_nota2);
                $cont = 1;
                while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $cont;?></th>
                    <td><?php echo $rows_nota2['modelo'];?></td>
                    <td><?php echo $rows_nota2['qtde'];?></td>
                </tr>
                <?php
                $cont = $cont+1;
                }
        }
                ?>
            </tbody>
        </table>
            </p>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
