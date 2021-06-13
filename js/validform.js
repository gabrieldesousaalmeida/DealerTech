//Acões dos botões
function cad_vei(){
  modelo = dados.modelo.value;
  marca = dados.marca.value;
  chassi = dados.chassi.value;
  fabricante = dados.fabricante.value;
  cor = dados.cor.value;

  if (modelo == '' || modelo.length >45) {
    alert('Campo modelo está vazio! ou excedeu a quantidade de 45!');
    dados.modelo.focus();
    return false;
  } else if (fabricante == '' || fabricante.length >45) {
    alert('Campo fabricante está vazio! ou excedeu a quantidade de 45!');
    dados.fabricante.focus();
    return false;
  }else if (marca == '' || marca.length >45) {
    alert('Campo marca está vazio! ou excedeu a quantidade de 45!');
    dados.marca.focus();
    return false;
  }else if (cor == '' || cor.length >30) {
    alert('Campo cor está vazio! ou excedeu a quantidade de 30!');
    dados.cor.focus();
    return false;
  }else if (chassi == '' || chassi.length >17) {
    alert('Campo chassi está vazio! ou excedeu a quantidade de 17!');
    dados.chassi.focus();
    return false;
  }else{
    $resposta= confirm("Os dados acima serão cadastrados");  
    if($resposta==1){

    }else{
      return false;
    }
  }
}
function cad_img(){
  $resposta= confirm("O nome da imagem e a imagem serão cadastrados");
  if($resposta==1){
    
  }else{
    return false;
  }
}
function deletar(){
  $resposta= confirm("O Usuário será Deletado");
  if($resposta==1){
    alert("Usuário Deletado Com Sucesso");
  }else{
    return false;
  }
}
function deletar_not(){
  $resposta= confirm("As notificações selecionadas serão deletadas");
  if($resposta==1){
    alert("Notificações Deletadas Com Sucesso");
  }else{
    return false;
  }
}
function ler_todas(){
  $resposta= confirm("Todas as notificações serão marcadas como 'Lidas'");
  if($resposta==1){
    alert("Notificações marcadas como lidas");
  }else{
    return false;
  }
}
function deletar_veiculo(){
  $resposta= confirm("O Veículo será Deletado");
  if($resposta==1){
    alert("Veículo Deletado Com Sucesso");
    document.location.reload(true);
  }else{
    return false;
  }
}
function alterar(){
  $resposta= confirm("Os dados do Usuário serão alterados");
  if($resposta==1){
    alert("Dados Alterados Com Sucesso");
  }else{
    return false;
  }
}
function ValidForm1() {
  nome = dados.nome.value;
  email = dados.email.value;
  senha = dados.senha.value;

 if (nome == '') {
   alert('Campo nome está vazio!');
   dados.nome.focus();
   return false;
 } else if (email == '' || email.indexOf('@') == -1) {
   alert('Campo email está vazio ou não possui email válido!');
   dados.email.focus();
   return false;
 } else if (senha == '' || senha.length <8) {
   alert('Campo senha está vazio ou senha é menor do que 8 dígitos');
   dados.senha.focus();
   return false;
 }else {
   
 }
}
function ValidForm2() {
   email = dados.email.value;
   senha = dados.senha.value;
   alert(email);

  if (email == '' || email.indexOf('@') == -1) {
    alert('Campo email está vazio ou não possui email válido!');
    dados.email.focus();
  } else if (senha == '' || senha.length <= 8) {
    alert('Campo senha está vazio ou senha é menor do que 8 caracteres');
    dados.senha.focus();  
  }else {
    alert('Login realizado com sucesso! Bem vindo novamente jovem padawan, que a força esteja com você.');
  }
}
