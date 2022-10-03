<?php
require_once 'Kucing.php';
require_once 'Kambing.php';
require_once 'Anjing.php';

$tom = new Kucing();
$shaun = new Kambing();
$rintintin = new Anjing();

$suara_hewan = [$tom, $shaun, $rintintin];

foreach($suara_hewan as $hewan){
    echo '<br/>'.$hewan->bersuara();
}