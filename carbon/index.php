<?php

require_once __DIR__ . '/vendor/autoload.php';

use Carbon\Carbon;

echo Carbon::now()->format('d/m/Y H:i:s');

echo '<br>';

$data = Carbon::now();
$data->addMinutes(30);

echo $data->format('d/m/Y H:i:s') . '<br>';

$data->subMonth(2);

echo $data->format('d/m/Y H:i:s') . '<br>';

$dataForm = '14/10/2018 12:00'; //ISO: 2018-10-14 12:00:00
$data = Carbon::createFromFormat('d/m/Y H:i', $dataForm);

echo $data . '<br>';
echo $data->day . '<br>';
echo $data->year . '<br>';
echo $data->timestamp . '<br>';

$data = Carbon::create(2018, 10, 14, 12, 0, 0);
echo $data;