<?php

require __DIR__ . '/vendor/autoload.php';

use Knp\Snappy\Pdf;

$snappy = new Pdf('/path/to/wkhtmltopdf');
$snappy->setTemporaryFolder('/tmp/');

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="relatorio.pdf"');

echo $snappy->getOutput('/path/to/htmlfile');