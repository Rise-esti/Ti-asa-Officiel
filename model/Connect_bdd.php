<?php
class Connect_bdd{
    protected function dbconnect(){
        $bdd = new PDO('mysql:host=localhost;dbname=tia_asa','rise','__@ti-asa__!') or die('not connect');
        return $bdd;
    }
}
