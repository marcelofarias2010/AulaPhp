<?php

// funções sem retorno
function mostra_boas_vindas()
{
    echo "Bem vindo, ao curso de PHP!";
}

mostra_boas_vindas();
echo '<br>';

// função com retorno
function calcular_soma(){
    return 10+5;
}
echo "a soma com retorno da função é ". calcular_soma();
echo '<br>';
//função com parâmetro
function calcular_subtracao($n1,$n2){
    $sub = $n1 - $n2;
    return $sub;
}
$res = calcular_subtracao(20, 7);
echo "A subtração com parâmetro é ". $res;
echo '<br>';
// função calcular desconto vindo dados externo
function calcularDesconto($valor_total, $desconto){
    $valor_desconto = $valor_total * ($desconto/100);
    $valor_total_desconto = $valor_total - $valor_desconto;
     return $valor_total_desconto;
}
