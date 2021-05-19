<?php

$d = getdate();
echo '<pre>';
var_dump($d);
echo '</pre>';

switch ($d['wday']) {
    case 5: echo("Finalmente Sexta");
        break;
    case 6: echo("Super Sábado");
        break;
    case 0: echo("Domingo Sonolento");
        break;
    default: echo("Estou esperando pelo fim da semana");
}
