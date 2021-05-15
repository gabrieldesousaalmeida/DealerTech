<?php
	include_once("conexao.php");
	$nome=$_POST['nome'];
	$imagem = $_FILES['arquivo']['name'];
	
	//Salvar no banco de dados
	$result_produto = "INSERT INTO imagens (nome, imagem) VALUES ('$nome', '$imagem')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id = mysqli_insert_id($conn);
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'C:\xampp\htdocs\DealerTech/veiculos/'.$ultimo_id.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'],$_UP['pasta'].$imagem)){
		echo "Imagem salva com sucesso!<br>";
	}
    $arquivo_origem = "C:/xampp/htdocs/DealerTech/veiculos/modelo_veiculo.php";
	$arquivo_destino = "C:/xampp/htdocs/DealerTech/veiculos/$ultimo_id/$ultimo_id.php";

	copy($arquivo_origem, $arquivo_destino);

	$conexao_origem = "C:/xampp/htdocs/DealerTech/veiculos/conexao.php";
	$conexao_destino = "C:/xampp/htdocs/DealerTech/veiculos/$ultimo_id/conexao.php";

	copy($conexao_origem, $conexao_destino);
	
	$_SESSION['msg'] = "";
    header("Location: http://localhost/DealerTech/admin/cadastro_veiculo.php");
?>