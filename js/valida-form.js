var nomeCompleto = document.getElementById('nome');
nomeCompleto.addEventListener('blur', function(){

    var expNome = /^[a-záàâãéèêíïóôõöúçñ]{3,}(\s[a-záàâãéèêíïóôõöúçñ]{2,})+$/g;
    var nomeValido = expNome.exec(nomeCompleto.value);
    if(!nomeValido){


    }


})

var cpfCompleto = document.getElementById('cpf');

cpf.addEventListener('blur', function(){
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if(!cpfValido){
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
        alert(msgCpf);
        console.log(msgCpf);
    }

    var cpfComPontos = cpfCompleto.value.replace(expCpf,
        function( valorRegex, argumento1, argumento2, argumento3, argumento4 ) {
           return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
   })
   
   cpfCompleto.setCustomValidity(msgCpf);
   cpf.value = cpfComPontos; 
   
})

var dataNascimento = document.querySelector('#nascimento');

dataNascimento.addEventListener('blur', (evento)=>{
    validaDataNascimento (evento.target);
})

function validaDataNascimento(input){
    var dataRecebida = new Date (input.value);
    var dataHoje = new Date();
    var dataMaior16 = new Date(dataRecebida.getFullYear() + 16, dataRecebida.getMonth(), dataRecebida.getDay());
    var msgNascimento = '';

    if(dataMaior16 <= dataHoje){
        msgNascimento = 'Vai envelhecer capirotinho.';

    }

    dataNascimento.setCustomValidity(msgNascimento);

}

var sexo = document.querySelector('#sexo');

sexo.addEventListener('blur', function(){

    var verificaSexo = sexo.value;
    var msgSexo = '';
    
    if(verificaSexo === 0){
        msgSexo = 'Você precisa selecionar o sexo.';
    
    }

    sexo.setCustomValidity(msgSexo);
})

var emailCompleto = document.querySelector('#email')

emailCompleto.addEventListener('blur, function(){
    var expEmail = asdf;
    var verificaEmail = expEmail.exec(emailCompleto.value);
    var msgEmail = '';

    if(verificaEmail === null){
        msgEmail = 'Digite um e-mail válido';

    }

    emailCompleto.setCustomValidity(msgEmail);
})