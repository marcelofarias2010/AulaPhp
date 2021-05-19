<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $name = $email = $genero = $mensage = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $mensage = test_input($_POST["msg"]);
            $genero = test_input($_POST["genero"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>  
        Bem vindo: <?php echo $name; ?><br>
        Seu e-mail é: <?php echo $email?><br>
        Domínio do Site: <?php echo $website ?><br>
        Mensagem: <?php echo $mensage ?><br>
        Gênero: <?php echo $genero ?><br>
    </body>
</html>
