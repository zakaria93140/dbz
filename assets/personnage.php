<?php
    class Personnage {

        protected $nom;
        protected int $puissance;
        protected int $pointsdevie;
        protected $race;
        protected $action[] = ["boule d'énergie", "coup physique", "esquive"];
        protected $nbaction;


        public function __construct($N,$P,$Z){
            $this->nom=$N;
            $this->puissance=$P;
            $this->pointsdevie=$Z;
        }

        public function getNom() {
            return $this->nom;
         }
         public function setNom($NewNom) {
            $this->nom = $NewNom;
         }

         public function getPuissance() {
            return $this->puissance;
         }
         public function setPuissance($NewPuissance) {
            $this->puissance = $NewPuissance;
         }

         public function getPointsdevie() {
            return $this->pointsdevie;
         }
         public function setPointsdevie($NewPointsdevie) {
            $this->pointsdevie = $NewPointsdevie;
         }

         public function getRace() {
            return $this->race;
         }
         public function setRace($NewRace) {
            $this->race = $NewRace;
         }
         





         public function PVloss($d){

            if($pointsdevie > 0){
                $pointsdevie = $pointsdevie - $d
            } else {
                echo $this->nom . "est mort";
                return;
            }
    

         }





    }
?>