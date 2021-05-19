<?php

// Criando um array simples
$frutas = array("Abacate","Banana","Laranja");
echo $frutas[1]."<br>";
// exibindo os valores do array
foreach ($frutas as $values){
    echo "$values <br>";
}

// Função is_array() verifica se o valor passado é um array
$frutas = array("Abacate","Banana","Laranja");
$frutas2 = "Abacate, Banana, Laranja";

if(is_array($frutas)){
    echo 'é um array';
}else{
    echo 'não é array';
}
echo'<br>';
//Função in_array() verifica se um valor existe no array
$frutas = ["Abacate","Banana","Laranja"];
$fruta = "uva";

if(in_array($fruta, $frutas)){
    echo "$fruta existe no array frutas";
}else{
    echo "$fruta não existe no array frutas";
}
echo '<br>';
// outro exemplo
$especializacao = [
    "nome"=>"EspecialistaTI",
    "fundacao"=>2020,
    "treinamentos"=>[
        "php",
        "JS",
        "HTML5",
        "Laravel"
    ]
];
$curso = "Laravel";
if(in_array($curso, $especializacao["treinamentos"])){
    echo "o curso $curso faz parte do array";
}else{
     echo "o curso $curso não faz parte do array";
}

//A Função array_keys() recupera o indice do array
$especializacao = [
    "nome"=>"EspecialistaTI",
    "fundacao"=>2020,
    "treinamentos"=>[
        "php",
        "JS",
        "HTML5",
        "Laravel"
    ]
];

echo "<pre>";
var_dump(array_keys($especializacao));
echo "</pre>";

// A Função array_values() recupera os valores do array
$especializacao = [
    "nome"=>"EspecialistaTI",
    "fundacao"=>2020,
    "treinamentos"=>[
        "php",
        "JS",
        "HTML5",
        "Laravel"
    ]
];

echo "<pre>";
var_dump(array_values($especializacao));
echo "</pre>";

// A função count() conta a qtd de valores em um array
$especializacao = [
    "nome"=>"EspecialistaTI",
    "fundacao"=>2020,
    "treinamentos"=>[
        "php",
        "JS",
        "HTML5",
        "Laravel"
    ]
];

echo "A quantidade de valores do array é ". count($especializacao);

// A Função array_merge() combina valores de um array
$especialista = [
    "nome"=>"Analista TI",
    "fundacao"=>2020
];
$treinamento = [
    "cursos"=>[
        "php",
        "JS",
        "HTML5",
        "Laravel"
    ]
];
echo "<pre>";
var_dump(array_merge($especialista,$treinamento));
echo "</pre>";

//A função array_pop() remove o último elemento do array.
$frutas = ["Abacate","Banana","Laranja","uva"];
array_pop($frutas);

echo "<pre>";
var_dump(($frutas));
echo "</pre>";

// A função array_shift() remove o primeiro elemento do array
$frutas = ["Abacate","Banana","Laranja","uva"];
array_shift($frutas);

echo "<pre>";
var_dump(($frutas));
echo "</pre>";

// A função array_push() adiciona um valor ao final do array
$frutas = ["Abacate","Banana","Laranja","uva"];
$novaFruta = "Maça";
array_push($frutas,$novaFruta);

echo "<pre>";
var_dump(($frutas));
echo "</pre>";

// A função  array_unshift() adiciona um valor ao inicio do array
$frutas = ["Abacate","Banana","Laranja","uva"];
$novaFruta = "Maça";
array_unshift($frutas,$novaFruta);

echo "<pre>";
var_dump(($frutas));
echo "</pre>";

// a função array_unique() remove itens duplicados
$frutas = ["Abacate","Banana","Laranja","uva","Banana","Abacate"];

$frutas = array_unique($frutas);

echo "<pre>";
var_dump(($frutas));    
echo "</pre>";

// a função arsort() ordena os valores em ordem decrescente
$frutas = ["Abacate","Banana","Laranja","uva"];

arsort($frutas);

echo "<pre>";
var_dump(($frutas));    
echo "</pre>";

// a função asort() ordena os valores em ordem crescente
$frutas = ["Uva","Laranja","Banana","Abacate"];

asort($frutas);

echo "<pre>";
var_dump(($frutas));    
echo "</pre>";

// a função sort(), ordena tanto os valores como os indices
$frutas = ["Uva","Laranja","Banana","Abacate"];

sort($frutas);

echo "<pre>";
var_dump(($frutas));    
echo "</pre>";

// A função compact() cria uma novo array e atribui a uma nova variável
$nome = "Marcelo Farias";
$email = "marcelo@gmail.com";
$empresa = "Senac";
$cursos = [
    "php",
    "JS",
    "HTML5",
    "Laravel"
];

$novoArray = compact('nome','email','empresa','cursos');

echo "<pre>";
var_dump($novoArray);    
echo "</pre>";

// A função end() recupera o último elemento do array
$frutas = ["Uva","Laranja","Banana","Abacate","Pêra"];

//recuperando o último elemento com count()-1
echo $frutas[count($frutas)-1]."<br>";
//recuperando o último elemento com end()
echo end($frutas);

//A função array_filter() permite filtrar os elementos de um array com base em 
//uma função de callback

$numeros = [2,5,9,11,158,35,65,47,7,0,6];

function checarNumber($value){
    return $value >= 40;
}

$novoNumber = array_filter($numeros,'checarNumber');

echo "<pre>";
var_dump($novoNumber);    
echo "</pre>";

// Função array_map() permite fazer alterações nos valores de um array
$frutas = ["Uva","Laranja","Banana","Abacate","Pêra"];

function maiuscula($values){
     return strtoupper($values);
}
$maiuscula = array_map('maiuscula', $frutas);
echo "<pre>";
var_dump($maiuscula);    
echo "</pre>";