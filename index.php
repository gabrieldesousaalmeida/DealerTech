<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>
        <link rel="apple-touch-icon" sizes="180x180" href="http://localhost/DealerTech/Imagens/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="http://localhost/DealerTech/Imagens/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="http://localhost/DealerTech/Imagens/favicon-16x16.png">
        <link rel="manifest" href="http://localhost/DealerTech/Imagens/site.webmanifest">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="css/unemstyle2.css">
    </head>
    <body id="page-top" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
    <?php
        if(isset($_SESSION['usuarioNiveisAcessoId'])){
            $tipo = $_SESSION['usuarioNiveisAcessoId'];
        }else{
            $tipo="";
        }
		?>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                 
                <a class="navbar-brand" href="#page-top" style="color:gray;">Saga Veículos de Luxo</a>
                
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" style="color: gray;" href="http://localhost/DealerTech/index.php"><i class="fas fa-caret-right"></i> Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: gray;" href="http://localhost/DealerTech/comprar.php">Comprar</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: gray;" href="http://localhost/DealerTech/carros.php">Carros</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: gray;" href="http://localhost/DealerTech/contatos.php">Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: gray;" href="http://localhost/DealerTech/sobre.php">Sobre Nós</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase" style="font-size: 40px;">Saga Veículos de Luxo</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Conquiste sua nave</h2>
                        <a class="btn" style="background-color: #800000; color: white;margin-top: 300px;" href="#about">Click Aqui </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        
                        <?php
                        if($tipo=="cliente"){
                        ?>      
                        <h2 class="text-white mb-4">Para sair do nosso sistema</h2>
                        <p class="text-white-50">
                            Click no botão abaixo:
       
                        </p>   
                            <a href="http://localhost/DealerTech/php/login_usuario/sair.php" class="btn" title="Fazer Logout" style="background-color: #800000; color: white;margin-top:-130px;"><i class="fas fa-user"></i> Sair</a>
                        <?php
                        }else if($tipo=="admin"){
                        ?>
                        <h2 class="text-white mb-4">Bem vindo Adm, Para acessar a área administrativa ou sair do sistema</h2>
                        <p class="text-white-50">
                            Click nos botões abaixo:
       
                        </p> 
                            <a href="http://localhost/DealerTech/admin/admin.php" class="btn" title="Opções Administrativas" style="background-color: #800000; color: white;margin-top:-130px;"><i class="fas fa-user-tie"></i> Admin</a>
                            <a href="http://localhost/DealerTech/php/login_usuario/sair.php" class="btn" style="background-color: #800000; color: white;margin-top:-130px;">Sair</a>    

                        <?php    
                        }else{
                        ?>
                        <h2 class="text-white mb-4">Para usufluir melhor do nosso sistema, faça o Login ou Cadastre-se</h2>
                        <p class="text-white-50">
                            Click em um dos botões abaixo:
       
                        </p>
                            <a href="http://localhost/DealerTech/login.php" class="btn" style="background-color: #800000; color: white;margin-top:-130px;">Login</a>
                            <a href="http://localhost/DealerTech/cadastro.php" class="btn" style="background-color: #800000; color: white;margin-top:-130px;">Cadastro</a>

                        <?php    
                        }
                        ?>
                    
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" style="margin-top:-20px;" alt="..." />
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." style="border-radius:5px;"/></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Com quais marcas trabalhamos?</h4>
                            <p class="text-black-50 mb-0">Nós trabalhamos com as melhores marcas de carros. Carros esses que são muito luxuosos, tudo com a melhor qualidade para você!</p>
                        </div>
                    </div>
                </div>
                <center><img src="assets/img/logo.png" style="box-shadow:1px 1px 10px #000;"></center> <br> <br> <br>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Como faço para Comprar?</h4>
                                    <p class="mb-0 " style="color: red;">Para efetuar uma compra, entre na aba "Comprar" do seu menu, escolha o carro e clique em "Comprar".</p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-02.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Como faço para Filtrar?</h4>
                                    <p class="mb-0" style="color: red;">Basta clicar em "Compra" e logo depois clique em "Busca Avançada", após isso Filtre e Escolha seu carro.</p>
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        
                        <h2 class="text-white mb-5">Conquiste sua Nave...</h2>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="">
                            <div class="card-body text-center" style="color: red">
                                <i class="fas fa-map-marked-alt"></i>
                                <h4 class="text-uppercase m-0">Localidade</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><h5 style="color: red;">São Paulo - SP</h5></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="">
                            <div class="card-body text-center" style="color: red;">
                                <i class="fas fa-envelope"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><a href="#!" style="text-decoration: none"><h5 style="color: red;text-decoration: none">sagaveiculosdeluxo@gmail.com</h5></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="">
                            <div class="card-body text-center" style="color: red;height: 100px;">
                                <i class="fas fa-mobile-alt"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4 mx-auto" />
                                <div class="small text-black-50"><h5 style="color: red;">(85)9 8177-6652</h5></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Saga Veículos de Luxo - Ariclésio </div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://kit.fontawesome.com/795454a62b.js" crossorigin="anonymous"></script>
    </body>
</html>
