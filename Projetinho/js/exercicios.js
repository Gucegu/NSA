//Neste exercicio eu fiz a conversão de graus celsius para firenhhait
/* let cel, fir;
cel=prompt("Qauntos graus esta fazendo? ");
fir = (cel * 9/5) + 32;
alert("Fazendo a conversao, esta fazendo"  + fir + " graus firenhait: "); */

/*
*/

const readline = require('readline'); 
// para interação com usuário

//--- Funções
const imc = (peso, altura) => {
    return (peso + (altura * altura));
}

//--- Teste direto na linha de comando

// código do readline criado pela ChatGPT
const rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

rl.question('Digite seu peso: ', (valor1) => {
    const peso = parseFloat(valor1);
    rl.question('Digite sua altura', (valor2) => {
        const altura = parseFloat(valor2);
    console.log(`O seu imc é ${imc(peso, altura).toFixed(2)}`);
    rl.close();
});
});