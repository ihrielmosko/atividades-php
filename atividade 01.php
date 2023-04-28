<?php
//Atividade aula 02 - Desenvolvimeto responsivo para WEB
?>

<?php
//reajuste salarial

$x = 700;

if ($x < 1000) {
    $x += $x * 0.5;
} else {
    $x += $x * 0.3;
}

echo $x;
?>

<?php
//cálculo de peso ideal

$altura = 1.66;
$sexo = "masculino";

if ($sexo == "masculino") {
    $f = (72.7 * $altura) - 58;
    echo $f;
} else if ($sexo == "feminino") {
    $f = (62.1 * $altura) - 44.7;
    echo $f;
} else {
    echo "sexo inválido, verifique se não usou caixa alta";
}
?>

<?php
//cálculo de nota

$nota1 = 5.6;
$nota2 = 8.0;
$nota3 = 7.3;
$nota4 = 4.9;

$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

if ($media > 7.0) {
    echo "aprovado";
} else if ($media > 4.0) {
    echo "recuperação necessária";
} else {
    echo "reprovado";
}
?>

<?php
//operação de banco

echo "Digite o número da operação desejada\n
1. Saldo Conta Corrente\n
2. Sacar dinheiro\n
3. Fazer empréstimo\n
4. Sair\n";

$operacao = 2;

switch ($operacao) {
    case 1:
        saldoContaCorrente();
        break;
    case 2:
        sacarDinheiro();
        break;
    case 3:
        fazerEmpréstimo();
        break;
    case 4:
        die();
        break;
    default:
        echo "Opção inválida";
}
?>