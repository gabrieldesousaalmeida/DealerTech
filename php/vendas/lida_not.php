<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$estado = "realizada";

$result_usuario = "UPDATE vendas SET estado='$estado' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

$result_cursos = "SELECT * FROM vendas WHERE id='$id'";
$resultado_cursos = mysqli_query($conn, $result_cursos);
while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) {
    $modelo = $rows_cursos['modelo'];
}
$result_cursos1 = "SELECT * FROM veiculos WHERE modelo='$modelo'";
$resultado_cursos1 = mysqli_query($conn, $result_cursos1);
while ($rows_cursos1 = mysqli_fetch_array($resultado_cursos1)) {
    $qtde_veiculos = intval($rows_cursos1['qtde']);
    $qtde = $qtde_veiculos - 1;
}    
$result_usuario1 = "UPDATE veiculos SET qtde='$qtde' WHERE modelo='$modelo'";
$resultado_usuario1 = mysqli_query($conn, $result_usuario1);
$_SESSION['confirm'] = "realizada";
header("Location: http://localhost/DealerTech/admin/vendas.php");

?>