
function validaNumerosDoCPF(cpfIncompleto, multiplicador) {
    var validacaoCPFInterno = 0

    for (var i = 0; i < cpfIncompleto.length; i++) {
        j = multiplicador - i;
        validacaoCPFInterno += (cpfIncompleto[i] * j);
    }
    return validacaoCPFInterno
}

function pegaRestoDoNumero (cpfValidation) {

    var validacaoNumero = (cpfValidation / 11) % 1;
    var restoNumero = Math.ceil(validacaoNumero * 10);
    
    return restoNumero
}

function pushCPF(cpfIncompleto, restoNumeroX) {
    if (restoNumeroX < 2) {
        cpfIncompleto.push(0);
    } else {
        cpfIncompleto.push(11 - restoNumeroX);
    }
}

function cpfGenerator (cpfIncompleto) {

    var validacaoCPF = validaNumerosDoCPF(cpfIncompleto, 10);
    var resto = pegaRestoDoNumero(validacaoCPF);
    pushCPF(cpfIncompleto, resto);

    validacaoCPF = validaNumerosDoCPF(cpfIncompleto, 11);
    resto = pegaRestoDoNumero(validacaoCPF);
    pushCPF(cpfIncompleto, resto);
}

var cpf = [0, 1, 1, 0, 4, 4, 9, 4, 1];

cpfGenerator(cpf);
console.log(cpf);