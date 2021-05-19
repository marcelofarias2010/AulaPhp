<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula de form</title>
        <link rel="shortcut icon" href="img/canon.png" />
        <style>
            input[type=text], input[type=email],input[type=date]  {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 2px solid black;
                border-radius: 4px;
            }
            select{
                width: 50%;
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
            input[type=submit]{
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
        <div class="container">
            <h1>Formulário de cadastro</h1>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <label>Nome:</label>
                <input type="text" name="nome" placeholder="digite seu primeiro nome"><br>
                <label>Sobrenome:</label>
                <input type="text" name="sobrenome" placeholder="digite seu sobrenome"><br>
                <label>E-mail</label>
                <input type="email" name="email" placeholder="informe seu email"><br>
                <label>Telefone:</label>
                <input type="text" name="tel" placeholder="(**) 9****-****"><br>
                <label>Data de nascimento</label>
                <input type="date" name="dtn" placeholder="data de nascimento"><br>
                <label>Sexo:</label>
                <select name="sexo">
                    <option value="">Escolha seu sexo</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="indefinido">Indefinido</option>
                </select><br>
                <label>Quantidade de filhos</label><br>
                1<input type="radio" id="um" name="filhos" value="um">
                2<input type="radio" id="dois" name="filhos" value="dois">
                3<input type="radio" id="tres" name="filhos" value="tres">
                <br>
                <label>Mensagem</label>
                <textarea name="msg"></textarea>
                <input type="submit" value="Enviar">
            </form>
            <?php
            $nome = $sobrenome = $email = $tel = $dtn = $sexo = $filhos = "";
            if ($_POST) {
                echo '<h1>Dados recebidos</h1><br>';
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $dtn = $_POST['dtn'];
                $sexo = $_POST['sexo'];
                $filhos = $_POST['filhos'];
            }

            
            echo "<p>Nome: $nome </p>";
            echo "<p>Sobrenome: $sobrenome </p>";
            echo "<p>E-mail: $email </p>";
            echo "<p>Telefone: $tel </p>";
            echo "<p>Nascimento: $dtn </p>";
            echo "<p>Sexo: $sexo </p>";
            echo "<p>Filhos: $filhos </p>";
            ?>
        </div>


    </body>
</html>
