<?php

// Função que retorna o comprimento de uma string
echo '<h4>strlen()-Retorna o comprimento da String</h4>';
$texto = "Bem vindo a aula do dia 07";
echo strlen($texto);
echo "<br>";
// Função que conta o número de palavras
echo '<h4>strlen()-Retorna o número de palavras</h4>';
$texto = "Bem vindo a aula do dia 07";
echo str_word_count($texto);
echo "<br>";
// Função strrev () inverte a ordem de uma string
echo '<h4>strrev()- inverte a ordem de uma string</h4>';
$texto = "Bem vindo a aula do dia 07";
echo strrev($texto);
echo "<br>";
// Função strpos ()strpos ()ntra uma palavre dentro de uma string 
// e retorna a posição
$texto = "Bem vindo a aula do dia 07";
echo strpos($texto, "aula");
echo "<br>";
// Funçao str_replace () substitui um texto dentro de uma string por outro texto
$texto = "acabou aula";
echo str_replace("aula", "curso", $texto);
echo "<br>";
// Função strtoupper() converte um texto em maíuscula
$texto = "acabou aula";
echo strtoupper($texto);
echo "<br>";
// Função strtolower() converte um texto em minúscula
$texto = "CURSO DE TECNICO EM INFORMATICA";
echo strtolower($texto);
echo "<br>";
// Função sustr() retorna parte de um texto de acordo com um tamanho passado
$texto = "CURSO DE TECNICO EM INFORMATICA";
echo substr($texto, 0, -15);
echo "<br>";
// Função str_pad() complementa uma string com um valor passado por argumento 
$texto = "Curso";
echo str_pad($texto, 10,"*");
echo "<br>";
echo str_pad($texto, 10,"*",STR_PAD_LEFT);
echo "<br>";
echo str_pad($texto, 10,"*",STR_PAD_BOTH);