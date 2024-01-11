<?php 

    
    class Mechants extends Personnage{

        protected $titre = 'Méchant';
        protected $etat =  array("sanguin", "malveillance MAX");

        public function __construct($N,$P,$Z){
            parent::__construct($N,$P,$Z);
        }

        public function sanguin(){

            $chancerage = rand(1, 50);
            if ($chancerage == 10){
                echo $this->nom. "est en " . $this->etat[0]. " , il gagne " . $this->puissance*0.5 . " de puissance \n";
                $this->puissance = $this->puissance + ($this->puissance*0.5);
            }

        }public function malveillanceMax (){
           
            $chanceheal = rand(1, 50);
            if ($chanceheal == 10){
                echo $this->nom. "est en " . $this->etat[1];
                $this->pointsdevie = $this->pointsdevie + ($this->pointsdevie*0.5);
            }
        }

        public function getTitre(){
            return $this->titre;
        }


    }

?>