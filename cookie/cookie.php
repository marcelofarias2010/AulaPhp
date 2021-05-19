<?php
/*
 * Um cookie é frequentemente usado para identificar um usuário. 
 * Um cookie é um pequeno arquivo que o servidor incorpora no computador do usuário. 
 * Cada vez que o mesmo computador solicita uma página com um navegador, ele enviará 
 * o cookie também. Com php, você pode criar e recuperar valores de cookies.
 */
$cookie_name = "usuario2";
$cookie_value = "Marcelo Alves Farias";

setcookie($cookie_name, $cookie_value, time() + (3600), "/"); 

?>
<html>
    <body>
        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "O nome do Cookie  '$cookie_name' não está definido!";
        } else {
            echo "Cookie '$cookie_name' está definido!<br>";
            echo "O valor é: '$_COOKIE[$cookie_name]'";
        }
        ?>
    </body>
</html>
