<?php

// exibir os valores de um array com foreach

$cores = array("azul","amarelo","vermelho","preto");
$cores2 = ["Marrom","verde","rosa","roxo"];

foreach ($cores2 as $values){
    echo $values."<br>";
}
 // exibir a chave e o valor do array

$idade = ["grazi"=>34,"robson"=>28,"Ralph"=>24,"Degir"=>35];

foreach ($idade as $key=>$values){
    echo "$key = $values <br>";
}