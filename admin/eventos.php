<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Eventos</title>
        <!--FullCalendar-->
        <link href='http://localhost/DealerTech/css/css_calendar/core/main.min.css' rel='stylesheet' />
        <link href='http://localhost/DealerTech/css/css_calendar/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/DealerTech/css/css_calendar/personalizado.css">

        <script src='http://localhost/DealerTech/js/js_calendar/core/main.min.js'></script>
        <script src='http://localhost/DealerTech/js/js_calendar/interaction/main.min.js'></script>
        <script src='http://localhost/DealerTech/js/js_calendar/daygrid/main.min.js'></script>
        <script src='http://localhost/DealerTech/js/js_calendar/core/locales/pt-br.js'></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="http://localhost/DealerTech/js/js_calendar/personalizado.js"></script>
        <!--/FullCalendar-->

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
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

    .show {
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
nav.classList.toggle('show')
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
            <h3>Eventos</h3>
            <div class="header_img"> <img src="http://localhost/DealerTech/Imagens/felipe.jfif" alt=""> </div>
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> 
                    <a href="http://localhost/DealerTech/index.php" class="nav_logo" style="color: white;text-decoration:none;"> <i class='fas fa-home'></i> <span class="nav_logo-name">Home</span> </a>
                    <div class="nav_list"> 
                        <a href="http://localhost/DealerTech/admin/admin.php" style="color: white;text-decoration:none;" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span></a>
                        <a href="http://localhost/DealerTech/admin/estoque.php" style="color: white;text-decoration:none;"class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Estoque</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='fas fa-car'></i> <span class="nav_name">Veículos</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_clientes.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuários</span> </a>  
                        <a href="http://localhost/DealerTech/admin/eventos.php" style="color: white;text-decoration:none;" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Eventos</span> </a>                         
                        <a href="http://localhost/DealerTech/admin/vendas.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Vendas</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_promocoes.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='fas fa-money-bill'></i> <span class="nav_name">Promoções</span> </a>
                        <div class="esp" style="height: 3rem;"></div>
                        <a href="http://localhost/DealerTech/php/login_usuario/sair.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sair</span> </a> 
                    </div>
                </div> 
            </nav>
        </div>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
        <!--Conteúdo da página-->
            <?php
        if (isset($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <div id='calendar'></div>

        <div class="modal fade" id="visualizar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalhes do Evento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="visevent">
                            <dl class="row">
                                <dt class="col-sm-3">ID do evento</dt>
                                <dd class="col-sm-9" id="id"></dd>

                                <dt class="col-sm-3">Título do evento</dt>
                                <dd class="col-sm-9" id="title"></dd>

                                <dt class="col-sm-3">Início do evento</dt>
                                <dd class="col-sm-9" id="start"></dd>

                                <dt class="col-sm-3">Fim do evento</dt>
                                <dd class="col-sm-9" id="end"></dd>
                            </dl>
                            <button class="btn btn-warning btn-canc-vis">Editar</button>
                            <a href="" id="apagar_evento" class="btn btn-danger">Apagar</a>
                        </div>
                        <div class="formedit">
                            <span id="msg-edit"></span>
                            <form id="editevent" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id" >
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Título</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control" id="title" placeholder="Título do evento">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Color</label>
                                    <div class="col-sm-10">
                                        <select name="color" class="form-control" id="color">
                                            <option value="">Selecione</option>			
                                            <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                            <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                            <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                            <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                                            <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                            <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                            <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                            <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                            <option style="color:#228B22;" value="#228B22">Verde</option>
                                            <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Início do evento</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Final do evento</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>
                                        <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-warning">Salvar</button>                                    
                                    </div>
                                </div>
                            </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Evento</h5>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <span id="msg-cad"></span>
                        <form id="addevent" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Título</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Título do evento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color" class="form-control" id="color">
                                        <option value="">Selecione</option>			
                                        <option style="color:#FFD700;" value="#FFD700">Amarelo</option>
                                        <option style="color:#0071c5;" value="#0071c5">Azul Turquesa</option>
                                        <option style="color:#FF4500;" value="#FF4500">Laranja</option>
                                        <option style="color:#8B4513;" value="#8B4513">Marrom</option>	
                                        <option style="color:#1C1C1C;" value="#1C1C1C">Preto</option>
                                        <option style="color:#436EEE;" value="#436EEE">Royal Blue</option>
                                        <option style="color:#A020F0;" value="#A020F0">Roxo</option>
                                        <option style="color:#40E0D0;" value="#40E0D0">Turquesa</option>
                                        <option style="color:#228B22;" value="#228B22">Verde</option>
                                        <option style="color:#8B0000;" value="#8B0000">Vermelho</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Início do evento</label>
                                <div class="col-sm-10">
                                    <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Final do evento</label>
                                <div class="col-sm-10">
                                    <input type="text" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>