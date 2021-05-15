<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM veiculos WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar Usuário</title>	
		<script type="text/javascript" src="valid_alt.js"></script>	
	</head>
	<body>
		<h1>Editar Veículo</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_veiculo.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Modelo: </label>
			<input type="text" name="modelo" value="<?php echo $row_usuario['modelo']; ?>"><br><br>
			
			<label>Chassi: </label>
			<input type="text" name="chassi" value="<?php echo $row_usuario['chassi']; ?>"><br><br>
			
			<label>Fabricante: </label>
			<input type="text" name="fabricante" value="<?php echo $row_usuario['fabricante']; ?>"><br><br>
			
			<label>Ano: </label>
			<input type="date" name="ano" value="<?php echo $row_usuario['ano']; ?>"><br><br>
			
			<label>Marca: </label>
			<input type="text" name="marca" value="<?php echo $row_usuario['marca']; ?>"><br><br>
			
			<label>Cor: </label>
			<input type="text" name="cor" value="<?php echo $row_usuario['cor']; ?>"><br><br>
			
			<input type="submit" value="Editar" onclick="return alterar_veiculo()">
			<input type="button" value="Retornar" onclick="window.location.replace('http://localhost/DealerTech/admin/gerenciar_veiculos.php');">
		</form>
	</body>
</html>