<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$estado = "lida";

$result_usuario = "UPDATE notificacoes SET estado='$estado' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$_SESSION['msg'] = "";
header("Location: http://localhost/DealerTech/admin/notificacoes.php");
?>