<?php

//Exercicio 01
function soma($arg1, $arg2, $arg3) {
    $soma = $arg1 + $arg2 + $arg3;
    return $soma;
}

function media($arg1, $arg2, $arg3) {
    $media = soma($arg1, $arg2, $arg3) / 3;
    return $media;
}

echo "A soma é ", soma(10, 5, 6), "<br>";
echo "A média é ", media(10, 5, 6), "<br>";

// Exercicio 02
function maiorMenor($n1, $n2, $n3) {
    $maior = max($n1, $n2, $n3);
    $menor = min($n1, $n2, $n3);
    echo "O maior número é $maior <br>";
    echo "O menor número é $menor <br>";
}

maiorMenor(10, 5, 6);

// Exercicio 03
function primos($value) {
    $divisores = 0;
    for ($cont = 2; $cont < $value; $cont++) {
        if ($value % $cont == 0) {
            echo "Multiplo de $cont<br />";
            $divisores++;
        }
    }
    if ($divisores) {
        echo "Não é primo, tem $divisores divisores além de 1 e ele mesmo";
    } else {
        echo "É primo!";
    }
    echo '<br>';
    // exibe os primos de 1 ate o valor com parametro
    for ($i = 1; $i <= $value; $i++) {
        $divisor = 0;
        for ($j = $i; $j >= 1; $j--) {
            if (($i % $j) == 0) {
                $divisor++;
            }
        }
        if ($divisor == 2) {
            echo $i . ', ';
        }
    }
}

echo primos(8);
