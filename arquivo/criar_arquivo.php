<?php

/* 
 * A função fopen() também é usada para criar um arquivo. Talvez um pouco confuso, 
 * mas no PHP, um arquivo é criado usando a mesma função usada para abrir arquivos.
   Se você usar em um arquivo que não existe, ele irá criá-lo, dado que o arquivo 
 * está aberto para escrita (w) ou appending (a).
 */
$myfile = fopen("testfile.txt", "w");

//A função fwrite() é usada para escrever em um arquivo.
//O primeiro parâmetro contém o nome do arquivo para escrever e o segundo 
//parâmetro é a sequência a ser escrita.

$myfile = fopen("newfile.txt", "w")or die("Não é possível abrir o arquivo!");
$txt = "Marcelo Farias\n";
fwrite($myfile, $txt);
$txt = "Jaqueline Farias\n";
fwrite($myfile, $txt);
fclose($myfile);
