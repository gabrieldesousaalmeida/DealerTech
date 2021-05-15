<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$fabricante = filter_input(INPUT_POST, 'fabricante', FILTER_SANITIZE_STRING);
$cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);
$chassi = filter_input(INPUT_POST, 'chassi', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "UPDATE veiculos SET modelo='$modelo', marca='$marca',fabricante='$fabricante',cor='$cor',ano='$ano',chassi='$chassi' WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Veículo editado com sucesso</p>";
	header("Location: edit_veiculo.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Veículo não foi editado com sucesso</p>";
	header("Location: edit_veiculo.php?id=$id");
}
