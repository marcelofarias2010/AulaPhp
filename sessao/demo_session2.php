<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// Echo session variables that were set on previous page
        echo "A cor favorita é " . $_SESSION["favcolor"] . ".<br>";
        echo "O animal favorito " . $_SESSION["favanimal"] . ".";
        ?>

    </body>
</html>
