<?php

//$target_dir = "img/" - especifica o diretório onde o arquivo será colocado
$target_dir = "img/";
//$target_file especifica o caminho do arquivo a ser carregado atraves da função basename
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
//$imageFileType detém a extensão do arquivo e converte os caracteres em minuscula
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Verifique se o arquivo de imagem é uma imagem real ou falsa
//A função getimagesize() retorna o tamanho de uma imagem com as extensões: 
//GIF, JPG, PNG, SWF, SWC, PSD, TIFF, BMP, IFF, JP2, JPX, JB2, JPC, XBM, ou WBMP.
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "Arquivo é uma imagem - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Arquivo não é uma imagem.";
        $uploadOk = 0;
    }
}

// Verifica se o arquivo ja existe
if (file_exists($target_file)) {
    echo "Desculpe, o arquivo ja existe.";
    $uploadOk = 0;
}

// Checar se o tamanho do arquivo eh maior que 500kb
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Desculpe, seu arquivo eh muito grande.";
    $uploadOk = 0;
}

// Permite certos formatos de arquivos
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Desculpe, apenas arquivos JPG, JPEG, PNG e GIF são permitidos.";
    $uploadOk = 0;
}

// Verifique se $uploadOk está definido como 0 por um erro.
if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi enviado.";
// se tudo estiver ok, tente carregar o arquivo
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "O arquivo " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " foi carregado.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar seu arquivo.";
    }
}