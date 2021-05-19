<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula de PHP com prof Marcelo</title>
    </head>
    <body>
        Senac-DF curso Técnico em Informática <br>
        <?php
        // put your code here
        $hello = "Hello World!";
        $code = "#BoraProgramar!";

        // aspas duplas exibe o conteúdo salvo na variável
        echo "<h1>$hello</h1>", "<br>  ", "<h3>$code</h3>", "</h1>";
        // aspas simples não exibe o valor da variável
        echo '<h1>$hello</h1>', "<br>  ", '<h3>$code</h3>', "</h1>";

        $dia = "dia";
        // a chave protege o valor da variável
        echo "<p> faltam 2 {$dia}s" . " para a aula de PHP</p>";

        print "<h3>{$hello} {$code} </h3>";

        $array = [
            "Empresa" => "Senac",
            "Curso" => "PHP",
            "class" => "Comandos de saída"
        ];

        print_r($array);

        echo "<pre>", print_r($array, true), "</pre>";

        $article = "<article><h1>%s</h1><p>%s</p></article>";
        $title = "{$hello} {$code}";
        $subtitle = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Phasellus vel condimentum dui. Maecenas a sagittis magna. Nullam purus 
            leo, varius eget velit mattis, porta porttitor eros. Sed mi velit, convallis 
            non mi vitae, rhoncus sollicitudin leo. Maecenas justo erat, eleifend 
            a arcu vitae, congue accumsan purus. Donec a nisl in leo egestas fringilla. 
            Curabitur vitae lobortis tellus. Quisque eu augue augue. Aliquam ultricies, 
            diam ut pharetra aliquam, ex quam iaculis eros, in auctor libero diam sed nibh. 
            Phasellus ac quam ac felis dictum placerat quis in ipsum. Nam non risus et urna 
            volutpat pharetra. Curabitur fringilla ante lacus, ultricies commodo est sollicitudin non.

            Ut molestie et felis a mollis. Class aptent taciti sociosqu ad litora 
            torquent per conubia nostra, per inceptos himenaeos. Mauris eu pulvinar eros. 
            Phasellus ultrices vel massa at consequat. Morbi eu ex feugiat, laoreet odio quis, 
            sodales leo. Praesent viverra dolor sit amet elit iaculis euismod. Aliquam lacinia 
            non dui vel dictum. Maecenas ligula orci, semper sit amet rhoncus non, efficitur id mi. 
            Praesent tincidunt eros vel faucibus accumsan. Vestibulum tempor, eros ac tempor fermentum, 
            magna odio varius nisi, maximus hendrerit mauris massa nec mauris. Phasellus tristique metus 
            quis erat laoreet, vitae condimentum ligula tristique.";

        echo sprintf($article, $title, $subtitle);
        
        var_dump($array);
        ?>
    </body>
</html>
