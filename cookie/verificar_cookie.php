<?php
/*
 * O exemplo a seguir cria um pequeno script que verifica se os cookies estão ativados. 
 * Primeiro, tente criar um cookie de teste com a função setcookie() e, em seguida, 
 * conte a variável de matriz de $_COOKIE:
 */

setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
    <body>

        <?php
        if(count($_COOKIE) > 0) {
        echo "Cookies estão ativos.";
        } else {
        echo "Cookies estão desativados.";
        }
        ?>

    </body>
</html>