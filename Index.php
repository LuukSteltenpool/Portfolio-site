<?php

//alle controllers binnen halen
require 'Controller/Indexcontroller.php';
require 'Controller/Projectscontroller.php';
require 'Controller/Contactcontroller.php';
require 'Controller/Downloadcontroller.php';

$path = $_SERVER['PATH_INFO'] ?? '/';

//Switch cases voor het wisselen van de URI van de pagina,
// bij een niet bestaande pagina gaat hij naar Home.

switch ($path) {
    case '/':
$Homepage = new Indexcontroller();
$Homepage->homepage();
        break;


    case '/Mycreations':
$projectspage = new Projectscontroller(); //de controller naam
$projectspage->projectspage(); //functie in controller
        break;

    case '/Downloads':
        $downloadspage = new Downloadcontroller(); //de controller naam
        $downloadspage->downloadpage(); //functie in controller
        break;

    case '/Contact':
       $contactspage = new Contactcontroller(); //de controller naam
       $contactspage->contactpage(); //functie in controller
        break;

    default:
        echo "error 404"; //default als hij niet goed route.
        break;
}
