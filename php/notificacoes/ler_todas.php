<?php
session_start();
include_once("conexao.php");

$estado = "lida";

$result_usuario = "UPDATE notificacoes SET estado='$estado' WHERE estado='não_lida'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$_SESSION['msg'] = "";
header("Location: http://localhost/DealerTech/admin/notificacoes.php");
?>