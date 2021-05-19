<?php
echo "Converte o texto em maiuscula<br>";
echo "<br>-------------------------------------------<br>";
$nome = "Marcelo Alves Farias";
$maiuscula = strtoupper($nome);
echo $maiuscula;
echo "<br>-------------------------------------------<br>";

echo "Converte o texto em minuscula<br>";
echo "<br>-------------------------------------------<br>";
$nome = "MARCELO ALVES FARIAS";
$minuscula = strtolower($nome);
echo $minuscula;
echo "<br>-------------------------------------------<br>";

echo "Retorna uma parte de uma string a partir de uma posicao<br>";
echo "<br>-------------------------------------------<br>";
$nome = "MARCELO ALVES FARIAS";
$sub = substr($nome,7);
echo $sub;
echo "<br>-------------------------------------------<br>";

echo "Retorna uma parte de uma string a partir de uma posicao e um tamanho <br>";
echo "<br>-------------------------------------------<br>";
$nome = "MARCELO ALVES FARIAS";
$sub2 = substr($nome,13,7);
echo $sub2;
echo "<br>-------------------------------------------<br>";

echo "uso do substr informando início da parte e comprimento negativo<br>";
echo "<br>-------------------------------------------<br>";
$nome = "MARCELO ALVES FARIAS";
$sub3 = substr($nome,7,-7);
echo $sub3;
echo "<br>-------------------------------------------<br>";

echo "a funcao str_pad recebe um string como parametro e complementa outra string<br>";
echo "<br>-------------------------------------------<br>";
$nome = "MARCELO";
$sub4 = STR_PAD($nome,9,"*");
echo $sub4;
echo "<br>-------------------------------------------<br>";

echo "a funcao str_pad recebe um string como parametro e complementa outra string<br>";
echo "<br>-------------------------------------------<br>";
$nome = "MARCELO";
$left = STR_PAD($nome,10,"*",STR_PAD_LEFT);
$right = STR_PAD($nome,10,"*",STR_PAD_RIGHT);
$both = STR_PAD($nome,10,"*",STR_PAD_BOTH);
echo $left;
echo '<br>';
echo $right;
echo '<br>';
echo $both;
echo "<br>-------------------------------------------<br>";

echo "a funcao str_repeat eh usada para repetir uma string uma qtd definida<br>";
echo "<br>-------------------------------------------<br>";
$nome = "MARCELO-";
$repete = str_repeat($nome,9);
echo $repete;
echo "<br>-------------------------------------------<br>";