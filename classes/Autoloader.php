<?php
namespace App;

class Autoloader
{
    public static function register()
    {
        spl_autoload_register([__CLASS__, 'autoload']);

    }

    public static function autoload($class)
    {
        $class = str_replace('App\\', '', $class);
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $file = __DIR__ . DIRECTORY_SEPARATOR . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            echo "<br><hr> Le fichier $file a été chargé avec succès.\n <br> <hr>";
        }   else {
            echo "Le fichier $file n'existe pas.\n";
        }     
    }
}