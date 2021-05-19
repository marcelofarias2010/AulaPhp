<?php

// A função date() retorna a data atual de execução
$format = "d/m/Y";
echo date($format);
echo '<br>';
// A função time() retorna qualquer número de segundos
$proximaSemana = time() + (7 * 24 * 60 * 60);
echo 'Agora:       ' . date('d-m-Y') . "<br>";
echo 'Próxima semana: ' . date('d-m-Y', $proximaSemana) . "<br>";
echo 'Próxima semana: ' . date('d-m-Y', strtotime('+1 week')) . "<br>";

// A função strtotime()
echo 'Próximo mês: ' . date('d-m-Y', strtotime('+1 month')) . "<br>";
echo 'Próximo mês: ' . date('d-m-Y', strtotime('+1 day')) . "<br>";
echo 'Próximo mês: ' . date('d-m-Y', strtotime('+1 year')) . "<br>";

//A função mktime() recebe como parâmetro hora, minuto, segundo, mês, dia e ano
$hour = "08";
$minute = "30";
$second = "15";
$month = "12";
$day = "09";
$year = "2020";
$data = mktime($hour, $minute, $second, $month, $day, $year);
echo date("d-m-Y", $data);

// A função dateTime() manipula datas em diversos formatos
$atual = new DateTime();
$especifica = new DateTime("18-12-2020");
$proximo = new DateTime(' +1 month');

print_r($atual);
print_r($especifica);
print_r($proximo);

echo '<pre>';
var_dump($atual, $especifica, $proximo);
echo '</pre>';

// exemplo 2 - com função DataTime()
$data = new DateTime();
echo $data->format('d-m-Y H:i:s');
echo '<br>';
$data = new DateTime('+1 month');
echo $data->format('d-m-Y H:i:s');
echo '<br>';

// exemplo 3 - ajustar data chamando o metodo setDate()
$data = new DateTime('10-12-2020');
$data->setDate(2021, 12, 9);
echo $data->format('d-m-Y H:i:s');
echo '<br>';

//exemplo 4 - ajustar a hora chamando o metodo setTime()
$data = new DateTime('09-12-2020');
$data->setTime(9, 18, 44);
echo $data->format('d-m-Y H:i:s');
echo '<br>';

//exemplo 5 - ajustando o timezone com o metodo setTimezone()
$fuso = new DateTimeZone('America/New_York');
$data = new DateTime('09-12-2020');
$data->setTimezone($fuso);
echo"A hora atual de nova york e ", $data->format('d-m-Y H:i:s');
echo '<br>';

// Função DateInterval()  representam um intervalo entre datas que pode armazenar
// um tempo (em anos, meses, dias ou horas) ou uma string relativa ao tempo que
// pode ser interpretada pelo construtor da classe DateTime.
$intervalo = new DateInterval('P2Y4D');
echo $intervalo->format('%y anos e %d dias');
echo '<br>';

// Função  diff() mostra a diferença entre duas datas
$data1 = new DateTime('2020-12-09');
$data2 = new DateTime('2020-12-18');
$intervalo = $data1->diff($data2);
echo $intervalo->format('%R%a dias');

// Comparando datas
$data1 = new DateTime('2020-09-11');
$data2 = new DateTime('2020-12-09');
echo '<pre>';
var_dump($data1 == $data2);
var_dump($data1 > $data2);
var_dump($data1 < $data2);
echo '</pre>';

// Somando interval a data e horario com o metodo add()
$data = new DateTime('2020-12-09');
echo '<pre>';
print_r($data);
echo '</pre>';

echo '<pre>';
$data->add(new DateInterval('P2M5D'));
print_r($data);
echo '</pre>';
