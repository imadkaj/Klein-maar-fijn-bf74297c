<?php


$input = ($argv[1]);

$a = array(50, 20, 10, 5, 2, 1);
$c = array(50, 20, 10, 5);

$geld = intval($input);
$cent = $input - $geld;
$cent = intval(round($cent * 100));

foreach ($a as $value) {
    $d= floor($geld / $value);
    if ($restbrief >= 1) {
        $geld = $geld - ($value * $restbrief);
        echo $restbrief . " x " . $value . " euro" . PHP_EOL;
    }
}

foreach ($c as $value) {
    $restcent = floor($cent / $value);
    if ($restcent >= 1) {
        $cent = $cent - ($value * $restcent);
        echo $restcent . " x " . $value . " cent" . PHP_EOL;
    }
}
