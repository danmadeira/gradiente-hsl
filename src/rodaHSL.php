<?php

namespace DMetibr;

ini_set('precision', 8);

require_once("ConversaoEspacoCor.class.php");

$saturacao = filter_input(INPUT_GET, 'saturacao', FILTER_VALIDATE_INT, array('options' => array('default' => 50, 'min_range' => 0, 'max_range' => 100)));
$brilho = filter_input(INPUT_GET, 'brilho', FILTER_VALIDATE_INT, array('options' => array('default' => 50, 'min_range' => 0, 'max_range' => 100)));

$ncores = 360 + 1; // 0°-360°
$altura = 300;
$faixa = round($altura * 2.39 / $ncores);
$largura = $faixa * $ncores;

$cec = new \DMetibr\ConversaoEspacoCor;

$imagem = imagecreatetruecolor($largura, $altura);
$posicao = 0;

for ($c = 0; $c < $ncores; $c++) {
    $hsl = array('hue' => $c, 'saturation' => $saturacao, 'lightness' => $brilho);
    $rgb = $cec->hsltorgb($hsl);
    $cor = imagecolorallocate($imagem, $rgb['red'], $rgb['green'], $rgb['blue']);
    imagefilledrectangle($imagem, $posicao, 0, $posicao + $faixa - 1, $altura - 1, $cor);
    $posicao = $posicao + $faixa;
}

header("Content-Type: image/png");
header('Content-Disposition: inline; filename="hsl.png"');
imagepng($imagem);
imagedestroy($imagem);
