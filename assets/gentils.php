<?php 

    require 'personnage.php';
    class Gentils extends Personnage {

        protected static $titre = 'Gentil';
        protected static $etat[] = ["rage", "bienveillance MAX", ]

        public function __construct($N,$P,$Z){
            parent::__construct($N,$P,$Z);
        }

        public function enrage(){
           
            $chancerage = rand(1, 20);
            if ($chancerage == 10){
                echo $this->nom. "est en " . $this->$etat[0];
                $this->puissance = $this->puissance + ($this->puissance*0,5);
            }
        }

        public function bienveillanceMax(){
           
            $chanceheal = rand(1, 20);
            if ($chanceheal == 10){
                echo $this->nom. "est en " . $this->$etat[1];
                $this->pointsdevie = $this->pointsdevie + ($this->pointsdevie*0,5);
            }
        }

        
        
    }


?>