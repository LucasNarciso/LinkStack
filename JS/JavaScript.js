function resetButton(idElemento){
    var elemento = document.getElementById("cor_"+idElemento+"");
    
    if (idElemento == 1) {
        elemento.value = "#105469";
    }else if (idElemento == 2){
        elemento.value = "#0CC270";
    }else if (idElemento == 3){
        elemento.value = "#FFFFFF";
    }else if (idElemento == 4){
        elemento.value = "#FFFFFF";
    }else if (idElemento == 5){
        elemento.value = "#296CA6";
    }
}

function botaoSwitchDistrib(idElemento){

    if (idElemento == '1') {
        var elemento = document.getElementById('switch' + 1);
        var outroElemento = document.getElementById('switch' + 2);
        
        outroElemento.classList.add('transp');
        elemento.classList.remove('transp');

        form = document.getElementById('formGeral');

        if (document.getElementById('InputDistribLink') != null) {
            elementoOld = document.getElementById('InputDistribLink');
            elementoOld.parentNode.removeChild(elementoOld);
        }

        var inputAux = document.createElement('input');
        inputAux.setAttribute('name', 'DistribLink');
        inputAux.setAttribute('value', 'dupla');
        inputAux.setAttribute('type', 'hidden');
        inputAux.setAttribute('id', 'InputDistribLink');

        form.appendChild(inputAux);

    }else if (idElemento == '2'){
        var elemento = document.getElementById('switch' + 2);
        var outroElemento = document.getElementById('switch' + 1);

        outroElemento.classList.add('transp');
        elemento.classList.remove('transp');

        form = document.getElementById('formGeral');

        if (document.getElementById('InputDistribLink') != null) {
            elementoOld = document.getElementById('InputDistribLink');
            elementoOld.parentNode.removeChild(elementoOld);
        }

        var inputAux = document.createElement('input');
        inputAux.setAttribute('name', 'DistribLink');
        inputAux.setAttribute('value', 'unica');
        inputAux.setAttribute('type', 'hidden');
        inputAux.setAttribute('id', 'InputDistribLink');

        form.appendChild(inputAux);
    }
}

function criarCard(){
    
    var qtdCards = document.getElementById('inputQTDLinks').value;

    var divExterna = document.getElementById('divInternaCards');

    var cardNovo = document.createElement('div');
    cardNovo.id = "card"+(parseInt(qtdCards)+1);
    cardNovo.classList.add('linkCardED');

    var divInterna1 = document.createElement('div');
    var divInterna2 = document.createElement('div');
    divInterna2.classList.add('divBotoesCardGeral');
    var divInterna3 = document.createElement('div');
    var divImagem = document.createElement('div');
    divImagem.classList.add('divBotoesCardInterna');

    var input1 = document.createElement('input');
    input1.classList.add('inputLinks');
    var input2 = document.createElement('input');
    input2.classList.add('inputLinks');
    var input3 = document.createElement('input');
    input3.classList.add('inputLinksQTD');
    input3.id = "inputPos"+(parseInt(qtdCards)+1);
    input3.value = (parseInt(qtdCards)+1);
    input3.readOnly = true;

    var button1 = document.createElement('button');
    button1.classList.add('hover');
    button1.classList.add('buttonLinks');

    var button2 = document.createElement('button');
    button2.classList.add('hover');
    button2.classList.add('buttonLinks');

    var imagem = document.createElement('img');
    imagem.id = 'bLixeira'+(parseInt(qtdCards)+1);
    imagem.src = 'imagens/Botao_Lixeira.svg';
    imagem.alt = 'Icone de Deletar o Card'
    imagem.width = "20";
    imagem.classList.add('hover');
    imagem.setAttribute('onclick', 'apagarCard(card'+(parseInt(qtdCards)+1)+')');

    var imagemBotaoCima = document.createElement('img');
    imagemBotaoCima.src = 'imagens/Botao_Cima.svg';
    imagemBotaoCima.alt = 'Botão de elevar posição do card'
    imagemBotaoCima.width = "15";

    var imagemBotaoBaixo = document.createElement('img');
    imagemBotaoBaixo.src = 'imagens/Botao_Baixo.svg';
    imagemBotaoBaixo.alt = 'Botão de diminuir posição do card'
    imagemBotaoBaixo.width = "15";

    cardNovo.appendChild(divInterna1);
    cardNovo.appendChild(divInterna2);

    divInterna1.appendChild(input1);
    divInterna1.appendChild(input2);

    divImagem.appendChild(imagem)

    divInterna2.appendChild(divImagem);
    divInterna2.appendChild(divInterna3);

    divInterna3.appendChild(button1);
    button1.appendChild(imagemBotaoCima);
    divInterna3.appendChild(input3);
    divInterna3.appendChild(button2);
    button2.appendChild(imagemBotaoBaixo);

    var cardADD = document.getElementById("cardADD");
    divExterna.insertBefore(cardNovo, cardADD);

    document.getElementById('inputQTDLinks').value = parseInt(qtdCards)+1;

}

function apagarCard(id) {
    
    var divPrincipal = document.getElementById('divInternaCards');
    divPrincipal.removeChild(id);

    var qtdLinksAtual = document.getElementById('inputQTDLinks').value;
    document.getElementById('inputQTDLinks').value = qtdLinksAtual-1;

    atualizarCard(id);
}

function atualizarCard(id) {

    var numCard = id.id;
    var qtdTotalCards = parseInt(document.getElementById('inputQTDLinks').value);
    numCard = numCard.replace('card', '');

    if ((qtdTotalCards+1) != numCard) {
        
        for (let i = 0; i < (qtdTotalCards+1)-parseInt(numCard); i++) {

            var card = document.getElementById('card'+(parseInt(numCard)+parseInt(i+1)));
            card.id = 'card'+(parseInt(numCard)+parseInt(i));

            var inputPos = document.getElementById('inputPos'+(parseInt(numCard)+parseInt(i+1)));
            inputPos.id = 'inputPos'+(parseInt(numCard)+parseInt(i));
            inputPos.value = (parseInt(numCard)+parseInt(i));

            var bLixeira = document.getElementById('bLixeira'+(parseInt(numCard)+parseInt(i+1)));
            bLixeira.id = 'bLixeira'+(parseInt(numCard)+parseInt(i));
            bLixeira.setAttribute('onclick', 'apagarCard(card'+(parseInt(numCard)+parseInt(i))+')');


        } 
    }
}