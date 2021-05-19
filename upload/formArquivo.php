<!DOCTYPE html>
<!--
Algumas regras a seguir para o formulário HTML acima:
Certifique-se de que o formulário usa método="post"
O formulário também precisa do seguinte atributo: enctype="multipart/form-data". 
Ele especifica qual tipo de conteúdo usar ao enviar o formulário
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Selecione imagem para upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </body>
</html>
