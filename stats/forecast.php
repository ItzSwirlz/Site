<?php
require '../vendor/autoload.php'; // Composer
require '../_core.php';
$twig = rc24_initialise_twig(getcwd() . "/../views/");
echo $twig->render('stats/forecast.html');

exit; // not really necessary, but nice to have :^)
?>
