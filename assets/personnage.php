<?php
    class Personnage {

        protected $nom;
        protected int $puissance;
        protected int $pointsdevie;
        protected $race;
        protected $action = array("attaquespe"=>"boule d'énergie", "attaque"=>"coup physique","defense"=>"esquive");
        protected $nbaction;
        protected $isDeadFlag = false;


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
         
         public function isDead(){
            if (!$this->isDeadFlag) {
               echo $this->nom . " est mort\n";
               $this->isDeadFlag = true;
           }
            
         }

         public function PVloss($d){
            echo "Points de vie before: " . $this->pointsdevie . "\n";
            echo "Damage: " . $d . "\n";
            $this->pointsdevie -= $d;

            if($this->pointsdevie <= 0 && !$this->isDeadFlag) {
               $this->isDead();
           } 
           



      }

    }
?>