<?php
class Test{
    private $_hello = "Hello World!";

    public function afficheHello(){
        echo $this->_hello;
        echo "<br>";
    }
}

$aff_hello = new Test;
$aff_hello->afficheHello();

class Personnage{
    private $_experience = 0;
    private $_force = 20;
    private $_localisation; 
    private $_degats = 0;

    public function __construct($force=1, $experience=7){
        $this->setExperience($experience);
        $this->setForce($force);
        $this->_degats = 5;
    }

    public function afficherExperience(){
        echo $this->_experience;
    }

    public function gagnerExperience(){
        $this->_experience++;
        //$this->_experience = $this->_experience + 1;
    }

    public function gagnerForce(){
        $this->_force = $this->_force + 10;
    }

    public function afficherForce(){
        echo $this->_force;
    }

    public function frapper(Personnage $perso){
        $perso->_degats += $this->_force;
    }

    public function setExperience($experience){
        if(!is_int($experience)){
            trigger_error("L'experience d'un personnage doit être un nombre entier", E_USER_WARNING);
            return;
        }

        $this->_experience = $experience;
    }

    public function setForce($force){
        $this->_force = $force;
    }

    public function afficherDegats(){
        echo $this->_degats;
    }

    public function degats(){
        return $this->_degats;
    }

    public function experience(){
        return $this->_experience;
    }
}

$modExp = new Personnage;
$modExp->afficherForce();

$perso1 = new Personnage(25, 15);
$perso2 = new Personnage(112, 114);

echo "<br> Exp perso 1 :";
$perso1->afficherExperience();
echo "<br> Exp perso 2 :";
$perso2->afficherExperience();


//$perso1->setForce(40);
//$perso2->setForce(12);

$perso1->frapper($perso2);
$perso1->gagnerExperience();
echo "<br>Degats perso 2 :";
$perso2->afficherDegats();
echo "<br> Exp perso 1 :";
$perso1->afficherExperience();
echo "<br>";

$perso2->frapper($perso1);
$perso2->gagnerExperience();
echo "Degats perso 1 :";
$perso1->afficherDegats();
echo "<br> Exp perso 2 :";
$perso2->afficherExperience();

$perso3= new Personnage;
$perso3->gagnerForce();
echo "<br> Force perso 3 : ";
$perso3->afficherForce();
$perso3->frapper($perso2);