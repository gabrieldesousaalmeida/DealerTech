function Aviso2(){
  alert("O seu foco é a sua realidade.");
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
  } else if (senha == '' || senha.length <= 8) {
    alert('Campo senha está vazio ou senha é menor do que 8 caracteres');
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
