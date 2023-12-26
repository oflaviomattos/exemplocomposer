<?php
require_once __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;

$mpdf = new Mpdf();

$conteudo = '<h1>Exemplo de Página com mPDF e Lorem Ipsum</h1>';
$conteudo .= '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.';


$conteudo .= '</p>';

$mpdf->WriteHTML($conteudo);

$mpdf->Output();
