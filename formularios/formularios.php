<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <title>Trabalhando com formulário</title>    
        <style>
            input[type=text], input[type=email] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 2px solid black;
                border-radius: 4px;
            }

            textArea{
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid black;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
            }
            input[type=submit] {
                width: 100%;
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
            }
            .container{
                display: block;
                width: 600px;
                margin: 0 auto;

            }
            span{
                color: red;
            }
        </style>
    </head>
    <body> 
        <?php
        $nome = $email = $site = $msg = $genero = "";
        $nomeErr = $emailErr = $siteErr = $msgErr = $generoErr = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (empty($_POST['nome'])) {
                $nomeErr = "O campo nome é requerido";
            } else {
                $nome = test_input($_POST['nome']);
                if(!preg_match("/^[a-zA-Z-' ]*$/", $nome)){
                    $nomeErr = "apenas letras e espaços são permitidos";
                }
            }
            if (empty($_POST['email'])) {
                $emailErr = "O campo email é requerido";
            } else {
                $email = test_input($_POST['email']);
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $emailErr = "Formato de e-mail inválido!";
                }
            }
            if (empty($_POST['website'])) {
                $siteErr = "";
            } else {
                $site = test_input($_POST['website']);
                if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%"
                        . "?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $site)){
                    $siteErr = "url inválida";
                }
            }
            if (empty($_POST['msg'])) {
                $msgErr = "";
            } else {
                $msg = test_input($_POST['msg']);
            }
            if (empty($_POST['genero'])) {
                $generoErr = "O campo genero é requerido";
            } else {
                $genero = test_input($_POST['genero']);
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <div class="container">
            <form method="post" action=<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>>
                <label>Nome </label><span class="error">*<?php echo $nomeErr; ?></span>
                <input type="text" name="nome">
                <label>E-mail</label><span class="error">*<?php echo $emailErr; ?></span>
                <input type="email" name="email">
                <label>Website</label><span>*<?php echo $siteErr; ?></span><br>
                <input type="text" name="website">
                <label>Mensagem</label>
                <textarea name="msg"></textarea>
                <label>Genero</label><span class="error">*<?php echo $generoErr; ?></span><br>
                Masc<input type="radio" name="genero" value="masculino">
                Femin<input type="radio" name="genero" value="feminino">
                Outros<input type="radio" name="genero" value="outros">
                <input type="submit" value="Enviar">
            </form> 
            <?php
            echo $nome . "<br>";
            echo $email . "<br>";
            echo $site . "<br>";
            echo $msg . "<br>";
            echo $genero . "<br>";
            ?>
        </div>

    </body>
</html>