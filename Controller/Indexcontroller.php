<?php
class Indexcontroller {
    public function homepage():void { //functie pagina openen//
        $title = 'homepage';

        include "./Views/Index.view.php";
    }
}
