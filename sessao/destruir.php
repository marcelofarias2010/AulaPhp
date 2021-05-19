<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
// remove todas as veriaveis de sessão
        session_unset();

// destroi a sessão
        session_destroy();
        
        ?>

    </body>
</html>

