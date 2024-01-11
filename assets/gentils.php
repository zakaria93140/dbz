<?php 


    class Gentils extends Personnage {

        protected $titre = 'Gentil';
        protected $etat = array("rage", "bienveillance MAX");

        public function __construct($N,$P,$Z){
            parent::__construct($N,$P,$Z);
        }

        public function enrage(){
           
            $chancerage = rand(1, 50);
            if ($chancerage == 10){
                echo $this->nom. " est en " . $this->etat[0] . " , il gagne " . $this->puissance*0.5 . " de puissance \n";
                $this->puissance = $this->puissance + ($this->puissance*0.5);
            }
        }

        public function bienveillanceMax(){
           
            $chanceheal = rand(1, 50);
            if ($chanceheal == 10){
                echo $this->nom." le ". $this->titre . " est en " . $this->etat[1] . " , il gagne " . $this->pointsdevie*0.5 . " de PV \n";
                $this->pointsdevie = $this->pointsdevie + ($this->pointsdevie*0.5);
            }
        }
        public function getTitre(){
            return $this->titre;
        }
    }


?>