<?php
session_start();

include_once("conexao.php");
$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);

$result_usuario = "SELECT * FROM clientes WHERE email='$email' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
//Econtrado usuario com esse e-mail
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);
	$userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
	$_SESSION['id'] = $row_usuario['id'];
	$_SESSION['usuarioNome'] = $row_usuario['nome'];
	$_SESSION['usuarioNiveisAcessoId'] = $row_usuario['niveis_acesso_id'];
	$resultado = 'http://localhost/DealerTech/index.php';
	echo $resultado;
}else{//Nenhum usuário encontrado
	$resultado = 'erro';
	echo(json_encode($resultado));
}