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
            header("Location: http://localhost/DealerTech/cadastro.php");
        }else if($resultado['email']==$usuario){
            $_SESSION['loginErro'] = "Usuário já esta cadastrado";
            header("Location: http://localhost/DealerTech/cadastro.php");
        }else if($niveis_acesso_id == "admin"){
            //email de solicitação
            $to = "sagaveiculosdeluxo@gmail.com";
            $subject = "Nova Solicitação de Conta Admin";
            $headers = "From: sagaveiculosdeluxo@gmail.com\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $message = '<html><body style="background-color: #808080;">';
            $message .= '<center><h1>Saga Veiculos de Luxo<br>';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: white;'><td><strong>Nome:</strong> </td><td>".$nome."</td></tr>";
            $message .= "<tr><td><strong>Email:</strong> </td><td style='text-decoration: none';>".$email."</td></tr>";
            $message .= "</table><br><a href='http://localhost/DealerTech/admin/cadastro_admin.php'><button>Cadastrar Email como Admin</button></a></center></body></html>";
            //mensagem tela de login
            if(mail($to,$subject,$message,$headers)){
                $_SESSION['loginErro'] = "Solicitação Enviada<br>Aguarde resposta";
                header("Location: http://localhost/DealerTech/cadastro.php");
            }else{
                $_SESSION['loginErro'] = "Solicitação não foi Enviada<br>Aguarde resposta";
                header("Location: http://localhost/DealerTech/cadastro.php");
            } 
        }else{
            //Inserir na tabela
            $result_usuario = "INSERT INTO clientes (nome, email, senha,niveis_acesso_id, created) VALUES ('$nome', '$email', '$senha','$niveis_acesso_id', NOW())";
            $resultado_usuario = mysqli_query($conn, $result_usuario);
                
            $_SESSION['loginErro'] = "Cadastro Feito, agora faça o login";
            header("Location: http://localhost/DealerTech/login.php");
        }
    }
?>
