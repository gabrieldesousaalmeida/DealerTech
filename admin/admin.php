<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>DASHBOARD</title>
        <meta charset='utf-8' />
        <link href='css/core/main.min.css' rel='stylesheet' />
        <link href='css/daygrid/main.min.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/personalizado.css">

        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
            
        <!--Google Charts-->
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        
        <!--Google Charts/ Vendas por Marca-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['BMW',     <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='BMW';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Checrolet',      <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Checrolet';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Ferrari',  <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Ferrari';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Lamburguine', <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Lamburguine';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Mercedes', <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Mercedes';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Porsche',    <?php
            $result_cursos = "SELECT COUNT(*) FROM veiculos WHERE marca='Porsche';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>]
        ]);

        var options = {
          title: 'Quatidade de modelos cadastrados por marca',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
        <!--Google Charts/ Vendas por Marca-->
        <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['BMW',     <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND marca='BMW';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Chevrolet',      <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND marca='Chevrolet';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Ferrari',  <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND marca='Ferrari';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Lamburguine', <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND marca='Lamburguine';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Mercedes',    <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND marca='Mercedes';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>],
          ['Porsche',    <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND marca='Porsche';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>]
        ]);

        var options = {
          title: 'Vendas Realizadas por Marca'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }

      
    </script>

    <!--Google Charts/ ESTOQUE - Quantidade por marca-->
      <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Quantidade", { role: "style" } ],
        ["BMW", <?php
            $result_cursos = "SELECT SUM(qtde) as soma_BMW FROM veiculos WHERE marca ='BMW'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "#b87333"],
        ["Chevrolet", <?php
            $result_cursos = "SELECT SUM(qtde) as soma_BMW FROM veiculos WHERE marca ='Chevrolet'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "silver"],
        ["Ferrari", <?php
            $result_cursos = "SELECT SUM(qtde) as soma_BMW FROM veiculos WHERE marca ='Ferrari'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "gold"],
        ["Lamburguine", <?php
            $result_cursos = "SELECT SUM(qtde) as soma_BMW FROM veiculos WHERE marca ='Lamburguine'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "green"],
        ["Mercedes", <?php
            $result_cursos = "SELECT SUM(qtde) as soma_BMW FROM veiculos WHERE marca ='Mercedes'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "blue"],
        ["Porsche", <?php
            $result_cursos = "SELECT SUM(qtde) as soma_BMW FROM veiculos WHERE marca ='Porsche'";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "red"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Quantidade de veículos por marca",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>

  <!--Google Charts/ Ganho por mês-->
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Realizadas", { role: "style" } ],
        ["Mar", <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND data_compra BETWEEN '2021-03-01' AND '2021-03-31';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "#b87333"],
        ["Abr", <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND data_compra BETWEEN '2021-04-01' AND '2021-04-31';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "silver"],
        ["Maio", <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND data_compra BETWEEN '2021-05-01' AND '2021-05-31';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "gold"],
        ["Jun", <?php
            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='realizada' AND data_compra BETWEEN '2021-06-01' AND '2021-06-31';";
            $resultado_cursos = mysqli_query($conn, $result_cursos);
            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)){
                echo $rows_cursos[0];
            }?>, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Quantidade de Vendas realizadas por mês",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
        <!--/Google Charts-->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
        <style>@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");</style>
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
            <h3>Status do Sistema</h3>
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
                        <a href="http://localhost/DealerTech/admin/admin.php" style="color: white;text-decoration:none;" class="nav_link active"> <i class='bx bx-grid-alt nav_icon' style="color:red;"></i> <span class="nav_name">Dashboard</span></a>
                        <a href="http://localhost/DealerTech/admin/estoque.php" style="color: white;text-decoration:none;"class="nav_link"> <i class='bx bx-folder nav_icon'style="color:red;"></i> <span class="nav_name">Estoque</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_veiculos.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='fas fa-car'style="color:red;"></i> <span class="nav_name">Veículos</span> </a>
                        <a href="http://localhost/DealerTech/admin/gerenciar_clientes.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-user nav_icon'style="color:red;"></i> <span class="nav_name">Usuários</span> </a>  
                        <a href="http://localhost/DealerTech/admin/eventos/eventos.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-bookmark nav_icon'style="color:red;"></i> <span class="nav_name">Eventos</span> </a>                         
                        <a href="http://localhost/DealerTech/admin/vendas.php" style="color: white;text-decoration:none;" class="nav_link "> <i class='bx bx-bar-chart-alt-2 nav_icon'style="color:red;"></i> <span class="nav_name">Vendas</span> </a>
                        <a href="http://localhost/DealerTech/admin/notificacoes.php" style="color: white;text-decoration:none;" class="nav_link "> <i class="fas fa-bell" style="color:red;"></i> <span class="nav_name">Notificações</span> </a>
                        <div class="esp" style="height: 3rem;"></div>
                        <a href="http://localhost/DealerTech/php/login_usuario/sair.php" style="color: white;text-decoration:none;" class="nav_link"> <i class='bx bx-log-out nav_icon'style="color:red;"></i> <span class="nav_name">Sair</span> </a> 
                    </div>
                </div>
                <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            </nav>
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
        <!--Conteúdo-->
        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
            <p>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4>Vendas</h4>
                        <div id="columnchart_values" style="width:25rem; height: 25rem;"></div>
                    </div>
                    
                    <div class="col-sm-6">
                    <br>
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total ganho Nesse Mês:</h5>
                            <?php
                            $data_fim_nao = date("Y/m/d");
                            list($ano, $mes, $dia) = explode('/', $data_fim_nao);
                            $mes_velho = date($ano."-".$mes."-01");
                            $mes_novo = date($ano."-".$mes."-31");
                            $result_cursos1 = "SELECT SUM(preço) as soma FROM vendas WHERE estado ='realizada' AND data_compra BETWEEN '$mes_velho' AND '$mes_novo';";
                            $resultado_cursos1 = mysqli_query($conn, $result_cursos1);
                            while ($rows_cursos1 = mysqli_fetch_array($resultado_cursos1)){
                            ?>
                            <p class="card-text">R$ <?php echo $rows_cursos1[0];?></p>
                            <?php
                            }?>
                            
                        </div>
                        </div>
  <br>
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Quantidade de Vendas em Andamento:</h5>
                            <?php
                            $result_cursos = "SELECT COUNT(*) FROM vendas WHERE estado='em_andamento';";
                            $resultado_cursos = mysqli_query($conn, $result_cursos);
                            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
                            ?>
                            <p class="card-text"><b><?php echo $rows_cursos[0];?></b></p>
                            <?php
                            }?>
                            <a href="vendas.php" class="btn btn-danger">Vendas</a>
                        </div>
                        </div>
                    </div>
                </div>
            </p>
            
            <p>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <h4>Veículos</h4>
                        <div id="donutchart" style="width: 800px; height: 400px; margin-left:-100px;"></div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h4>Estoque</h4>
                        <div id="barchart_values" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
            </p>
            
            <p>
                <div class="row">
                    <div class="col-sm-5">
                        <h4>Clientes</h4>
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Quantidade de Clientes Cadastrados:</h5>
                            <?php
                            $result_cursos = "SELECT COUNT(*) FROM clientes WHERE niveis_acesso_id='cliente';";
                            $resultado_cursos = mysqli_query($conn, $result_cursos);
                            while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
                            ?>
                            <p class="card-text"><b><?php echo $rows_cursos[0];?></b></p>
                            <?php
                            }
                            ?>
                            <a href="gerenciar_clientes.php" class="btn btn-danger">Gerenciar Clientes</a>
                        </div>
                        </div>
<br>
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nesse mês:</h5>
                            <?php
                            $data_fim_nao = date("Y/m/d");
                            list($ano, $mes, $dia) = explode('/', $data_fim_nao);
                            $mes_velho = date($ano."-".$mes."-01");
                            $mes_novo = date($ano."-".$mes."-31");
                            $result_nota2 = "SELECT COUNT(*) FROM clientes WHERE niveis_acesso_id='cliente' AND created BETWEEN '$mes_velho' AND '$mes_novo';";
                            $resultado_nota2 = mysqli_query($conn, $result_nota2);
                            while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
                            ?>  
                                <p class="card-text"><b><?php echo  $rows_nota2[0];?></b></p>
                            <?php
                             
                            }
                            ?>
                            
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <h4>Vendas</h4>
                        <div id="piechart" style="width: 850px; height: 450px;"></div>
                    </div>
                </div>
            </p>
        </div>
       
        
        <!--/Conteúdo-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
