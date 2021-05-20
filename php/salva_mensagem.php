<?php 
    session_start();
    include_once('conexao.php');
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senhas = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $niveis_acesso_id = "cliente";

    //Verificar se existe no banco
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    	$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
        
        $_SESSION['redirecionar']="red";
			
		//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
        if($resultado['email']==$usuario){
            $_SESSION['loginErro'] = "Usuário ou senha já estão cadastrados";
            header("Location: http://localhost/DealerTech/cadastro.php");
        }else if($resultado['email']==$usuario){
            $_SESSION['loginErro'] = "Usuário já esta cadastrado";
            header("Location: http://localhost/DealerTech/cadastro.php");
        }else{
            //Inserir na tabela
            include_once("processa_email.php");
            $_SESSION['usuarioemail'] = $email;
            $_SESSION['usuariosenha'] = $senhas;
            $_SESSION['usuarionome'] = $nome;
            $_SESSION['usuarioniveisacessoid'] = $niveis_acesso_id;
            $_SESSION['loginErro'] = "Agora acesse sua caixa de entrada do email, procure por 'confirmação de email sagaveiculosdeluxo', abra e confirme seu cadastro!";
            header("Location: http://localhost/DealerTech/cadastro.php");
            
        }
    }
?>
