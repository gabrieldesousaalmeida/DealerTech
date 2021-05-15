<?php 
    session_start();
    include_once('conexao.php');
    
    $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
    $chassi = filter_input(INPUT_POST, 'chassi', FILTER_SANITIZE_STRING);
    $fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
    $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
    $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
    $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
    $preço = filter_input(INPUT_POST, 'preço', FILTER_SANITIZE_STRING);
    $qm = filter_input(INPUT_POST, 'qm', FILTER_SANITIZE_STRING);

    $result_usuario = "INSERT INTO veiculos (modelo, chassi, fabricante, ano, marca, cor, preço, qm) VALUES ('$modelo', '$chassi', '$fabricante', '$ano','$marca','$cor','$preço', '$qm')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    
    $_SESSION['msg'] = "";
    header("Location: http://localhost/DealerTech/php/cadastro_veiculo/upload.php");
?>
