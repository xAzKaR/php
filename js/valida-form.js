// Valida Nome
var nomeCompleto = document.getElementById('nome');

nomeCompleto.addEventListener('blur', function(){
    var expNome = /^([^0-9]){3,50}$/g;
    var nomeValido = expNome.exec(nomeCompleto.value);
    console.log(nomeValido);
    var msgNome = '';
    
    if(nomeValido === null){
        msgNome = 'Digite o nome completo';
    }

    nomeCompleto.setCustomValidity(msgNome);
    

})

// Valida CPF
var cpfCompleto = document.getElementById('cpf');

cpf.addEventListener('blur', function(){
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if(cpfValido === null){
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
        console.log(msgCpf);
    }

   /* var cpfComPontos = cpfCompleto.value.replace(expCpf,
        function( valorRegex, argumento1, argumento2, argumento3, argumento4 ) {
           return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
   })*/
   
   cpfCompleto.setCustomValidity(msgCpf);
  // cpf.value = cpfComPontos; 
   
})

//Valida Data de Nascimento

var dataNascimento = document.querySelector('#nascimento');

dataNascimento.addEventListener('blur', (evento)=>{
    validaDataNascimento(evento.target);
})

function validaDataNascimento(input){
    var dataRecebida = new Date(input.value);
    console.log(dataRecebida);
    var dataHoje = new Date();
    console.log(dataHoje);
    var dataMaior16 = new Date(dataRecebida.getFullYear() + 16, dataRecebida.getMonth(), dataRecebida.getDay());
    console.log(dataMaior16);
    var msgNascimento = '';

    if(dataMaior16 >= dataHoje){
        msgNascimento = 'Você precisa ser maior de 16 anos.';
        console.log(dataMaior16 <= dataHoje);
    }

    input.setCustomValidity(msgNascimento);

}

// Valida Sexo

var sexo = document.querySelector('#sexo');

sexo.addEventListener('blur',function(){
    var verificaSexo = sexo.value;
    var msgSexo = '';

    if(verificaSexo === '0'){
        msgSexo = 'Você precisa selecionar o sexo.';
    }

    sexo.setCustomValidity(msgSexo);

})

//Valida email

var emailCompleto = document.querySelector('#email')

emailCompleto.addEventListener('blur', function(){
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if(verificaEmail === null){
        msgEmail = 'Digite um e-mail válido';
    }

    emailCompleto.setCustomValidity(msgEmail);
})

// Valida Telefone

var telefone = document.querySelector('#telefone');

telefone.addEventListener('blur',(evento)=>{
    verificaTelefone(evento.target);
})

function verificaTelefone(elemento){
    var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;
    var telValido = expTel.exec(elemento.value);
    console.log(telValido);
    var msgTel = '';

    if(!telValido){
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
        console.log(!telValido);
    }

    elemento.setCustomValidity(msgTel);
}

//Termos de Privacidade
var termoPriv = document.querySelector('#termos');

//Botão de Envio sem termo exibe caixa de alerta
var btnEnviar = document.querySelector('#submit');

btnEnviar.addEventListener('click',function(){
    exibeAlertaTermo();
})

function exibeAlertaTermo() {
    if(!termoPriv.checked && senha.validity.valid){
        alert('Você precisa aceitar os Termos de Privacidade, antes de prosseguir.');
    }
}

//Mostra Senha

var verSenha = document.querySelector('#versenha');
var senha = {
    senha1: document.querySelector('#senha1'),
    senha2: document.querySelector('#senha2')
}

verSenha.addEventListener('change',(evento)=>{
    mostraSenha(evento.target);
})

function mostraSenha(input) {
   if(input.checked){
       senha.senha1.type = 'text';
       senha.senha2.type = 'text'; 
   }else{
       senha.senha1.type = 'password';
       senha.senha2.type = 'password';
   }    
}
