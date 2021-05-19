<?php

/* 
 A função readfile() lê um arquivo e o grava no buffer de saída.
 */
echo '<pre>';
echo readfile("webdictionary.txt");
echo '</pre>';

// A função fopen() lhe dá mais opções do que a função readfile().
//O primeiro parâmetro contém o nome do arquivo a ser aberto e o segundo 
//parâmetro especifica em que modo o arquivo deve ser aberto.
//A função fread() é lida a partir de um arquivo aberto.
//A função fclose() é usada para fechar um arquivo aberto.

$meuarquivo = fopen("webdictionary.txt", "r")or die("Incapaz de abrir arquivo!");
echo '<pre>';
echo fread($meuarquivo, filesize("webdictionary.txt"));
echo '</pre>';
fclose($meuarquivo);

/*
r - Abra um arquivo apenas para leitura. O ponteiro do arquivo começa no início do arquivo
w - Abra um arquivo apenas para gravação. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir. 
a - Abrir um arquivo apenas para gravação. Os dados existentes no arquivo são preservados. 
x - Cria um novo arquivo apenas para gravação. Devoluções FALSAs e um erro se o arquivo já existir
r+  Abra um arquivo para leitura/gravação. O ponteiro do arquivo começa no início do arquivo
w+  Abra um arquivo para leitura/gravação. Apaga o conteúdo do arquivo ou cria um novo arquivo se ele não existir.  
a+  Abra um arquivo para leitura/gravação. Os dados existentes no arquivo são preservados. 
x+  Cria um novo arquivo para leitura/gravação. Devoluções FALSAs e um erro se o arquivo já existir 
 *  
 */

// A função fgets() é usada para ler uma única linha de um arquivo.
$myfile = fopen("webdictionary.txt", "r") or die("Incapaz de abrir o arquivo!");
echo fgets($myfile);
fclose($myfile);

echo '<br>';

//A função feof() verifica se o "fim do arquivo" (EOF) foi atingido.
//A função feof() é útil para looping através de dados de comprimento desconhecido.
$myfile = fopen("webdictionary.txt", "r") or die("Incapaz de abrir o arquivo!");
// Saída uma linha até o fim do arquivo
while(!feof($myfile)) {
    //A função fgetc() é usada para ler um único caractere de um arquivo.
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
