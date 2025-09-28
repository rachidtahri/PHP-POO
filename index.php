<h1 style="text-align: center;">Namespaces et Autoloader</h1>
<hr width="350px">

<?php

use App\Autoloader;
use App\Banque;
use App\Banque\{CompteCourant , CompteEpargne};   
use App\Client\Compte as CompteClient;

require_once 'classes/Autoloader.php';
App\Autoloader::register();

$compte1 = new CompteEpargne("Jean Dupont", 200, 5);
var_dump($compte1);
