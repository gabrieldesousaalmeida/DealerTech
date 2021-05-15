<?php 
    session_start();
    include_once('conexao.php');
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $niveis_acesso_id = filter_input(INPUT_POST, 'niveis_acesso_id', FILTER_SANITIZE_STRING);
    //Verificar se existe no banco
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		$_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioSenha'] = $resultado['senha'];
        if($resultado['email']==$usuario){
            $_SESSION['loginErro'] = "Usuário ou senha já estão cadastrados";
            header("Location: http://localhost/DealerTech/admin/cadastro_admin.php");
        }else if($resultado['email']==$usuario){
            $_SESSION['loginErro'] = "Usuário já esta cadastrado";
            header("Location: http://localhost/DealerTech/admin/cadastro_admin.php");
        }else{
            //Inserir na tabela
            $result_usuario = "INSERT INTO clientes (nome, email, senha,niveis_acesso_id, created) VALUES ('$nome', '$email', '$senha','$niveis_acesso_id', NOW())";
            $resultado_usuario = mysqli_query($conn, $result_usuario);
                
            $_SESSION['loginErro'] = "Cadastro Feito";
            header("Location: http://localhost/DealerTech/admin/cadastro_admin.php");
        }
    }
?>