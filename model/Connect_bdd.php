<?php
class Connect_bdd{
    protected function dbconnect(){
        $bdd = new PDO('mysql:host=localhost;dbname=tia_asa','tia-asa','tia-asa') or die('not connect');
        return $bdd;
    }
}
