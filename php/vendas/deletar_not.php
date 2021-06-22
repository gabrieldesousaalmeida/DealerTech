<?php

session_start();
include_once('conexao.php');

$carros_id = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($carros_id);

if (isset($carros_id['id'])) {
    foreach ($carros_id['id'] as $id => $carro) {
        $result_cursos = "SELECT * FROM vendas WHERE id = $id LIMIT 1";
        $resultado_cursos = mysqli_query($conn, $result_cursos);
        while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
            $evento_cod = $rows_cursos['evento_cod'];
            $query_del_carro = "DELETE FROM events WHERE evento_cod = '$evento_cod'";
            $result_del_carro = $conn->prepare($query_del_carro);
            $result_del_carro->execute();
        }
        $query_del_carro = "DELETE FROM vendas WHERE id = $id LIMIT 1";
        $result_del_carro = $conn->prepare($query_del_carro);
        $result_del_carro->execute();

        $_SESSION['confirm'] = "ok";
        header("Location: http://localhost/DealerTech/admin/vendas.php");
    } 
	
}else{
	$_SESSION['confirm'] = "negativo";
	header("Location: http://localhost/DealerTech/admin/vendas.php");
	
}

?>
