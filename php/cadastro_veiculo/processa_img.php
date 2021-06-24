<?php
	session_start();
    $marca = $_SESSION['marca'];
	$modelo = $_SESSION['modelo'];
	include_once("conexao.php");
	$imagem1 = $_FILES['arquivo1']['name'];
	$imagem2 = $_FILES['arquivo2']['name'];
	$imagem3 = $_FILES['arquivo3']['name'];
	$imagem4 = $_FILES['arquivo4']['name'];
	$imagem5 = $_FILES['arquivo5']['name'];
	$imagem6 = $_FILES['arquivo6']['name'];
	$imagem7 = $_FILES['arquivo7']['name'];
	$imagem8 = $_FILES['arquivo8']['name'];
	$imagem9 = $_FILES['arquivo9']['name'];
	
	//Salvar no banco de dados
	$result_produto = "INSERT INTO imagens (nome, imagem, zoom_small, slide1, slide2, slide3, slide4, slide5, slide6, zoom_large) VALUES ('$modelo', '$imagem1', '$imagem2', '$imagem3', '$imagem4', '$imagem5', '$imagem6', '$imagem7', '$imagem8', '$imagem9')";
	$resultado_produto = mysqli_query($conn, $result_produto);
	$ultimo_id = mysqli_insert_id($conn);
	
	//Pasta onde o arquivo vai ser salvo
	$_UP['pasta'] = 'C:\xampp\htdocs\DealerTech/veiculos/'.$marca.'/'.$modelo.'/';
	
	//Criar a pasta de foto do produto
	mkdir($_UP['pasta'], 0777);
	
	if(move_uploaded_file($_FILES['arquivo1']['tmp_name'],$_UP['pasta'].$imagem1)){
		if(move_uploaded_file($_FILES['arquivo2']['tmp_name'],$_UP['pasta'].$imagem2)){
			if(move_uploaded_file($_FILES['arquivo3']['tmp_name'],$_UP['pasta'].$imagem3)){
				if(move_uploaded_file($_FILES['arquivo4']['tmp_name'],$_UP['pasta'].$imagem4)){
					if(move_uploaded_file($_FILES['arquivo5']['tmp_name'],$_UP['pasta'].$imagem5)){
						if(move_uploaded_file($_FILES['arquivo6']['tmp_name'],$_UP['pasta'].$imagem6)){
							if(move_uploaded_file($_FILES['arquivo7']['tmp_name'],$_UP['pasta'].$imagem7)){
								if(move_uploaded_file($_FILES['arquivo8']['tmp_name'],$_UP['pasta'].$imagem8)){
									if(move_uploaded_file($_FILES['arquivo9']['tmp_name'],$_UP['pasta'].$imagem9)){
										echo "Imagem salva com sucesso!<br>";
									}
								}
							}
						}
					}
				}
			}
		}
	}

	//Copiar arquivos
    $arquivo_origem = "C:/xampp/htdocs/DealerTech/modelo_individual.php";
	$arquivo_destino = "C:/xampp/htdocs/DealerTech/veiculos/$marca/$modelo/$modelo.php";

	copy($arquivo_origem, $arquivo_destino);

	$conexao_origem = "C:/xampp/htdocs/DealerTech/veiculos/conexao.php";
	$conexao_destino = "C:/xampp/htdocs/DealerTech/veiculos/$marca/$modelo/conexao.php";

	copy($conexao_origem, $conexao_destino);
	$modelo_compra = $modelo."_compra";
	$arquivo_origem = "C:/xampp/htdocs/DealerTech/comprar_carro.php";
	$arquivo_destino = "C:/xampp/htdocs/DealerTech/veiculos/$marca/$modelo/$modelo_compra.php";

	copy($arquivo_origem, $arquivo_destino);

	//NOTIFICAÇÃO
	date_default_timezone_set("America/New_York");
    $hora2 = date("H:i:sa");
	list($h, $m, $s) = explode(':', $hora2);
	$hora1 = $h+1;
	$hora = ($hora1.":".$m.":".$s);
	$data = date("Y/m/d");
	$title = "Novo Veículo Cadastrado";
	$nota = "Um novo veículo foi cadastrado:".$marca." ".$modelo."";
	$estado = "não_lida";
	$campo = "Carros";
	$result_not = "INSERT INTO notificacoes (title, nota, datas, hora, estado, campo) VALUES ('$title', '$nota', '$data', '$hora', '$estado', '$campo')";
	$resultado_not = mysqli_query($conn, $result_not);

	$_SESSION['mensagem1'] = "ok";
	$_SESSION['msg'] = "";
    header("Location: http://localhost/DealerTech/admin/cadastrar_veiculo/cadastrar_veiculo.php");
?>