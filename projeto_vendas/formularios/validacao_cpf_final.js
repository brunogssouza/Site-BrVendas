var cpf = [0, 1, 1, 0, 4, 4, 9, 4, 1];

var validacaoCPF = 0;
// validação da soma dos numeros sendo o primeiro multiplicado por 10, segundo por 9 e assim em diante // 

function validacao() {
    for (var i = 0; i < cpf.length; i++) {

        j = 10 - i
        validacaoCPF += (cpf[i] * j);


        document.write(j);
        document.write("<br>");
        document.write(i);
        document.write("<br>");
        document.write(cpf[i]);
        document.write("<br>");
        document.write(validacaoCPF);
        document.write("<br>");
        document.write("<br>");
        document.write("FIM DO CICLO");
        document.write("<br>");
        document.write("<br>");
    }
    return validacaoCPF
}

// Definindo o resto do numero que foi divido por 11 na formula (de forma inteira) // 

document.write(validacao(cpf));
document.write("<br>"); document.write("<br>");
document.write("FIM DO LOOP DO PRIMEIRO NUMERO");
document.write("<br>");
document.write("<br>");
var validacao1Numero = (validacaoCPF / 11) % 1;
document.write(validacao1Numero);
document.write("<br>");
var restoNumero = Math.round(validacao1Numero * 10);
document.write(restoNumero);

document.write("<br>"); document.write("<br>"); document.write("<br>");


// definindo as condições que determinarão qual numero subirá para a array //  
//resto < 2 = 0  ; resto => 2 = 11 - resto ; //
function pushCPF() {
    if (restoNumero < 2) {
        cpf.push(0);
    } else {
        cpf.push(11 - restoNumero);
    }
}

pushCPF(restoNumero);

// CALCULO SEGUNDO NUMERO DA VALIDACAO DO CPF //

//A ARRAY NESSA FASE TEM QUE POSUIR JA O ELEMENTO INSERIDO PELO pushCPF na função anterior para realizar o calculo //

document.write(cpf);

document.write("<br>");
document.write("<br>");

var validacaoCPF2 = 0;

function validacao2() {
    for (var i = 0; i < cpf.length; i++) {

        j = 11 - i
        validacaoCPF2 += (cpf[i] * j);


        document.write(j);
        document.write("<br>");
        document.write(i);
        document.write("<br>");
        document.write(cpf[i]);
        document.write("<br>");
        document.write(validacaoCPF2);
        document.write("<br>");
        document.write("<br>");
        document.write("FIM DO CICLO");
        document.write("<br>");
    }
    return validacaoCPF2
}

//Conseguindo o resto do numero dividido por 11 para realizar o calculo que definirá o numero 2 // 


document.write(validacao2(cpf));
document.write("<br>"); document.write("<br>");
document.write("FIM DO LOOP DO SEGUNDO NUMERO");
var validacao2Numero = (validacaoCPF2 / 11) % 1;
document.write(validacao2Numero);
document.write("<br>");
var restoNumero2 = Math.round(validacao2Numero * 10);
document.write(restoNumero2);


// definindo as condições que determinarão qual numero subirá para a array // 

function pushCPF2() {
    if (restoNumero2 < 2) {
        cpf.push(0);
    } else {
        cpf.push(11 - restoNumero2);
    }
}

// executando a função // 


document.write("<br>"); document.write("<br>");
pushCPF2(restoNumero2);
document.write(restoNumero2);

document.write("<br>"); document.write("<br>");
document.write(cpf);