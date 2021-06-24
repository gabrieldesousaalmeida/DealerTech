<?php 
    session_start();
    include_once('conexao.php');

    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $versao = filter_input(INPUT_POST, 'versao', FILTER_SANITIZE_STRING);
    $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
    $motor = filter_input(INPUT_POST, 'motor', FILTER_SANITIZE_STRING);
    $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
    $blindagem = filter_input(INPUT_POST, 'blindagem', FILTER_SANITIZE_STRING);
    $cambio = filter_input(INPUT_POST, 'cambio', FILTER_SANITIZE_STRING);
    $preço = filter_input(INPUT_POST, 'preço', FILTER_SANITIZE_STRING);
    $qm = filter_input(INPUT_POST, 'qm', FILTER_SANITIZE_STRING);

    $preço_valor = number_format($preço,3, '.', '.');
    if($qm ==0){
        $qm_estado ="Novo";
    }else{
        $qm_estado ="Usado";
    }

    $result_usuario = "INSERT INTO veiculos (modelo, ano, marca, cor, preço, qm, qm_estado, cambio, blindagem, versao, motor) VALUES ('$modelo', '$ano','$marca','$cor','$preço_valor', '$qm', '$qm_estado', '$cambio', '$blindagem', '$versao', '$motor')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if($marca=="BMW"){
        $categorias_post_id = 1;
    }else if($marca=="Chevrolet"){
        $categorias_post_id = 2;
    }else if($marca=="Ferrari"){
        $categorias_post_id = 3;
    }else if($marca=="Lamborghini"){
        $categorias_post_id = 4;
    }else if($marca=="Mercedes"){
        $categorias_post_id = 5;
    }else if($marca=="Porsche"){
        $categorias_post_id = 6;
    }
    $result_usuario = "INSERT INTO sub_categorias_post (nome_sub_categoria, categorias_post_id) VALUES ('$modelo', '$categorias_post_id')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    $_SESSION['marca'] = $marca;
    $_SESSION['modelo'] = $modelo;
    $_SESSION['msg'] = "";
    header("Location: http://localhost/DealerTech/admin/cadastrar_veiculo/upload.php");
?>
