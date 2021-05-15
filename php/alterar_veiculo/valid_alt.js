function Aviso2(){
  alert("O seu foco é a sua realidade.");
}
function deletar(){
  $resposta= confirm("O Usuário será Deletado");
  if($resposta==1){
    alert("Usuário Deletado Com Sucesso");
  }else{
    return false;
  }
}
function alterar_veiculo(){
  $resposta= confirm("Os dados do Veículo serão alterados");
  if($resposta==1){
    alert("Dados Alterados Com Sucesso");
  }else{
    return false;
  }
}
function deletar_veiculo(){
  $resposta= confirm("O Veículo será Deletado");
  if($resposta==1){
    alert("Veículo Deletado Com Sucesso");
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
  } else if (senha == '' || senha.length <=8 || senha.length<=8) {
    alert('Campo senha está vazio ou senha não possui exatamente 8 dígitos');
    dados.senha.focus();
    return false;
  } else {
    alert('Cadastro feito! Bem vindo jovem padawan, que a força esteja com você.');
  }
}
function ValidForm2() {
   email = dados.email.value;
   senha = dados.senha.value;

  if (email == '' || email.indexOf('@') == -1) {
    alert('Campo email está vazio ou não possui email válido!');
    dados.email.focus();
  } else if (senha == '' || senha.length <= 8) {
    alert('Campo senha está vazio ou senha é menor do que 8 caracteres');
    dados.senha.focus();  
  } else {
    alert('Login realizado com sucesso! Bem vindo novamente jovem padawan, que a força esteja com você.');
  }
}
