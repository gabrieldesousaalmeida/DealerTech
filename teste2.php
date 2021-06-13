<?php
    session_start();
    include_once('php/conexao.php');
?>
<html>
    <body>
    <?php
    date_default_timezone_set("America/New_York");
    $hora2 = date("H:i:sa");
    list($h, $m, $s) = explode(':', $hora2);
    $hora1 = $h+1;
    $hora = ($hora1.":".$m.":".$s);
	$data = date("Y/m/d");
	$title = "Novo Veículo Cadastrado";
	$nota = "Um novo veículo foi cadastrado: BMW Polo236";
	$estado = "não_lida";
	$campo = "Carros";
	$result_not = "INSERT INTO notificacoes (title, nota, datas, hora, estado, campo) VALUES ('$title', '$nota', '$data', '$hora', '$estado', '$campo')";
	$resultado_not = mysqli_query($conn, $result_not);
    ?>
    </body>
<html>