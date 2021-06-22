<?php 
    session_start();
    include_once('conexao.php');

    $linhas = $_SESSION['linhas'];
    $i =1;
    while($i <= $linhas){
    $qtde = filter_input(INPUT_POST, "qtde$i", FILTER_SANITIZE_NUMBER_INT);
    $modelo = filter_input(INPUT_POST, "id_sub_categoria$i", FILTER_SANITIZE_STRING);

    $result_nota2 = "SELECT * FROM veiculos WHERE modelo='$modelo';";
    $resultado_nota2 = mysqli_query($conn, $result_nota2);
    while ($rows_nota2 = mysqli_fetch_array($resultado_nota2)) {
        $qtde_veiculos = intval($rows_nota2['qtde']);
        $qtde = $qtde + $qtde_veiculos;
    }
    $result_usuario = "UPDATE veiculos SET qtde='$qtde' WHERE modelo='$modelo'";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
    echo $modelo;
    $i++;
    }
    $_SESSION['msg'] = "ok";
    header("Location: http://localhost/DealerTech/admin/estoque.php");
    
?>