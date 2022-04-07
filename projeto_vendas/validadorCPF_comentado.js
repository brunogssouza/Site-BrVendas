//função validaNumerosDoCPF será nosso meio de obtenção da soma dos numeros dos vetores multiplicados de 10 até 1 e armazenará na variavel criada validacaoCPFInterno//
// multiplicador será definido na função ativadora //~
// i será nosso index dos vetores //

function validaNumerosDoCPF(cpfIncompleto, multiplicador) {
    var validacaoCPFInterno = 0

    for (var i = 0; i < cpfIncompleto.length; i++) {
        j = multiplicador - i;
        validacaoCPFInterno += (cpfIncompleto[i] * j);
    }
    return validacaoCPFInterno
}

//função pegaRestoDoNumero receberá um parametro posteriormente que será o retorno de validaNumerosDoCPF (validacaoCPFInterno)//
// Nessa função pegaremos o numero do somatorio , dividiremos por 11 e pegaremos O RESTO com o (%) //
// Após pegar o resto transformaremos ele em um numero inteiro para utilizar o algoritimo de validação de CPF // 
// O retorno dessa função será o resto da divisão como um numero inteiro // 

function pegaRestoDoNumero (cpfValidation) {

    var validacaoNumero = (cpfValidation / 11) % 1;
    var restoNumero = Math.ceil(validacaoNumero * 10);
    
    return restoNumero
}

// Esta condicional definira qual será o numero que recebera um push para array CPF//
// Se o numero do resto for menor que 2 , o numero do CPF será igual a 0 //
// Se o numero do resto for maior ou igual a 2, o numero do CPF será 11 - restoNumero //

function pushCPF(cpfIncompleto, restoNumeroX) {
    if (restoNumeroX < 2) {
        cpfIncompleto.push(0);
    } else {
        cpfIncompleto.push(11 - restoNumeroX);
    }
}

// Essa função ativadora definira todos os parametros das funções anteriores e acionará a execução da validação, dando para nós na primeira parte da função//
//o numero 1 e na segunda parte da função dará o numero 2//
// na primeira parte receberemos cpfIncompleto (cpf), e o multiplicador = 10 porque o primeiro numero multiplicamos a partir de 10 //
//Após descobrir o numero, vamos fazer o push dele para dentro da array para que quando demos o console.log dele, ja apareça o 10º numero do nosso CPF//

// A segunda parte da função será o mesmo esquema, a unica diferença será que nosso multiplicador será igual a 11. Porque? porque agora temos um 10º numero na array//
// realizaremos a soma das multiplicações, pegar o resto, transformar em numero inteiro e verificar no IF se o que subirá será igual a 0 ou 11- numeroResto // 
// por fim, subiremos o ultimo numero a array e demonstraremos no console.log final todo CPF completo //


function cpfGenerator (cpfIncompleto) {

    var validacaoCPF = validaNumerosDoCPF(cpfIncompleto, 10);
    var resto = pegaRestoDoNumero(validacaoCPF);
    pushCPF(cpfIncompleto, resto);

    validacaoCPF = validaNumerosDoCPF(cpfIncompleto, 11);
    resto = pegaRestoDoNumero(validacaoCPF);
    pushCPF(cpfIncompleto, resto);
}

//´por ultimo, definiremos a variavel CPF que queremos encontrar os ultimos 2 numeros //
var cpf = [0, 1, 1, 0, 4, 4, 9, 4, 1];

// executaremos a função ativadora // 
cpfGenerator(cpf);

// demonstrará na tela o CPF completo //
console.log(cpf);