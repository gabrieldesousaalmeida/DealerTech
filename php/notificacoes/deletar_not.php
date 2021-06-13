<?php

session_start();
include_once('conexao.php');

$carros_id = filter_input_array(INPUT_POST, FILTER_DEFAULT);
var_dump($carros_id);

if (isset($carros_id['id'])) {
    foreach ($carros_id['id'] as $id => $carro) {
        $query_del_carro = "DELETE FROM notificacoes WHERE id = $id LIMIT 1";
        $result_del_carro = $conn->prepare($query_del_carro);
        $result_del_carro->execute();
    }   
	$_SESSION['confirm'] = "ok";
	header("Location: http://localhost/DealerTech/admin/notificacoes.php");
}else{
	$_SESSION['nen'] = "ok";
	header("Location: http://localhost/DealerTech/admin/notificacoes.php");
}

?>
