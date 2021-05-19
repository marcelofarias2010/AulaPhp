<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// Set session variables
        $_SESSION["favcolor"] = "Verde";
        $_SESSION["favanimal"] = "Peixe";
        echo "A variável da sessão foi definida.";
        ?>

    </body>
</html>

