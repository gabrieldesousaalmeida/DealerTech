<?php
session_start();
include_once('conexao.php');

$estado = "em_andamento";
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$modelo = $_SESSION['modelo'];
//Pegar data
date_default_timezone_set("America/New_York");


//Pegar Preço
$result_cursos = "SELECT * FROM veiculos WHERE modelo='$modelo'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
    $preço = $rows_cursos['preço'];
    $marca = $rows_cursos['marca'];
    $versao = $rows_cursos['versao'];
    $evento_cod = $marca."-".$modelo."-".$versao."-".$nome;
    $venda_cod = $marca."-".$modelo."-".$versao."-".$nome;

$start = filter_input(INPUT_POST, 'start', FILTER_SANITIZE_STRING);
$data_start = str_replace('/', '-', $start);
$data_start_conv = date("Y-m-d", strtotime($data_start));

$hora_start = str_replace('/', '-', $start);
$hora_start_conv = date("H:i:s", strtotime($data_start));

$result_usuario = "INSERT INTO vendas (estado, preço, nome, email, telefone, CPF, marca, modelo, versao, data_compra, hora_compra, evento_cod, venda_cod) VALUES ('$estado', '$preço', '$nome', '$email', '$telefone', '$CPF', '$marca', '$modelo', '$versao', '$data_start_conv', '$hora_start_conv', '$evento_cod', '$venda_cod')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//Evento

$data_start_conv1 = date("Y-m-d H:i:s", strtotime($data_start));
list($h, $m, $s) = explode(':', $hora_start_conv);
$hora1 = $h+2;
$end_hora = ($hora1.":".$m.":".$s);
$dateobject = new DateTime( $data_start_conv . ' ' . $end_hora );

// só faz sentido usar isso se for processar a data
// de maneira complexa antes de usar

$end = $dateobject->format('Y-m-d H:i:s');

$title = "Reunião de Venda com ".$nome;
$color= "#FF0000";
$link = "https://meet.google.com/sff-ddis-vhm";
$result_usuario = "INSERT INTO events (title, color, link, start, end, evento_cod) VALUES ('$title', '$color', '$link', '$data_start_conv1', '$end', '$evento_cod')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//NOTIFICAÇÃO
date_default_timezone_set("America/New_York");
$hora2 = date("H:i:sa");
list($h, $m, $s) = explode(':', $hora2);
$hora1 = $h+1;
$hora = ($hora1.":".$m.":".$s);
$data = date("Y/m/d");
$title = "Nova proposta de Venda foi Criada";
$nota = $nome." deseja comprar o seguinte veículo: ".$marca." ".$modelo." ".$versao;
$estado = "não_lida";
$campo = "Vendas";
$result_not = "INSERT INTO notificacoes (title, nota, datas, hora, estado, campo) VALUES ('$title', '$nota', '$data', '$hora', '$estado', '$campo')";
$resultado_not = mysqli_query($conn, $result_not);

//Encaminhar
$_SESSION['compra_confirm'] = "ok";
header("Location: http://localhost/DealerTech/veiculos/".$marca."/".$modelo."/".$modelo."_compra.php");
}
?>