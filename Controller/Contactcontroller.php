<?php
class Indexcontroller {
    public function page():void {
        $title = 'homepage';

        include "./Views/Index.view.php";
    }
}
