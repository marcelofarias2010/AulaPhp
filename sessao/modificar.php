<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// modificar a variável de uma sessao
        $_SESSION["favcolor"] = "Amarelo";
        $_SESSION["favanimal"] = "Papagaio";
        echo '<pre>';
        print_r($_SESSION);
        echo '<pre>';
        ?>

    </body>
</html>

