<?php

include './funcoes_criadas.php';

$total = 800;
$desc2 = 10;


$desc = calcularDesconto($total, $desc2);
?>

Valor Total: R$ <?php echo $total; ?> <br>
Valor Desconto:<?php echo $desc2; ?>% <br>
Valor Total com desconto: R$ <?php echo $desc;?> <br>


