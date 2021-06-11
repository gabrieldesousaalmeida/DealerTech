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

    $preço_valor = number_format($preço,2, '.', '');

    $result_usuario = "INSERT INTO veiculos (modelo, ano, marca, cor, preço, qm, cambio, blindagem, versao, motor) VALUES ('$modelo', '$ano','$marca','$cor','$preço_valor', '$qm', '$cambio', '$blindagem', '$versao', '$motor')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    $_SESSION['marca'] = $marca;
    $_SESSION['modelo'] = $modelo;
    $_SESSION['msg'] = "";
    header("Location: http://localhost/DealerTech/admin/cadastrar_veiculo/upload.php");
?>
