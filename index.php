<h1 style="text-align: center;">Namespaces et Autoloader</h1>
<hr width="350px">

<?php

use App\Autoloader;
use App\Banque;
use App\Banque\{CompteCourant , CompteEpargne};   
use App\Client\Compte as CompteClient;

require_once 'classes/Autoloader.php';
App\Autoloader::register();


$compte2 = new CompteClient("Marie", "Curie");
var_dump($compte2);
echo "<br> <hr> <br>";


$compte1 = new CompteEpargne($compte2, 200, 5);
var_dump($compte1);
echo "<br> <hr> <br>";

$compte3 = new CompteCourant($compte2, 300, 400);
var_dump($compte3);
echo "<br> <hr> <br>";


