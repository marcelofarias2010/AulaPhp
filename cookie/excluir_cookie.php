<?php

/*
  Para excluir um cookie, use a função setcookie() com uma data de validade no passado:
 */
$cookie_name = "usuario2";
$cookie_value = "Marcelo Alves Farias";
setcookie($cookie_name, $cookie_value, time() - (3600), "/");
?>

<html>
    <body>

        <?php
        echo "Cookie 'usuario' foi deletado.";
        ?>

    </body>
</html>
