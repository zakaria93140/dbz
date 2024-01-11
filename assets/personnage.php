<?php
    class Personnage {

        protected $nom;
        protected int $puissance;
        protected int $pointsdevie;
        protected $race;
        protected $action = array("boule d'énergie", "attaque physique", "esquive");
        protected $nbaction;
        protected $isDeadFlag = false;
        protected $coupUltime = array("Kamehameha", "Final Flash", "Masenko Sappo", "Death Beam", "Big Bang Crash", "Majin Kamehameha");


        public function __construct($N,$P,$Z){
            $this->nom=$N;
            $this->puissance=$P;
            $this->pointsdevie=$Z;
        }

        public function special(){

            switch($this->getNom()){
               
               case "Songoku":
                  $nomCoup = $this->coupUltime[0];
                  $attaqueUltime = $this->puissance / 2;
                  return [$nomCoup, $attaqueUltime];
               case "Vegeta":
                  $nomCoup = $this->coupUltime[1];
                  $attaqueUltime = $this->puissance / 2;
                  return [$nomCoup, $attaqueUltime];
               case "Piccolo":
                  $nomCoup = $this->coupUltime[2];
                  $attaqueUltime = $this->puissance / 2;
                  return [$nomCoup, $attaqueUltime];
               case "Freezer":
                  $nomCoup = $this->coupUltime[3];
                  $attaqueUltime = $this->puissance / 2;
                  return [$nomCoup, $attaqueUltime];
               case "Cell":
                  $nomCoup = $this->coupUltime[4];
                  $attaqueUltime = $this->puissance / 2;
                  return [$nomCoup, $attaqueUltime];
               case "Majin Buu":
                  $nomCoup = $this->coupUltime[5];
                  $attaqueUltime = $this->puissance / 2;
                  return [$nomCoup, $attaqueUltime];

            }



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

         public function getPV() {
            return $this->pointsdevie;
         }
         public function setPV($NewPointsdevie) {
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

         public function getAction($i){

            return $this->action[$i];

         }

         public function PVloss($d){
            echo "Points de vie before: " . $this->pointsdevie . "\n";
            echo "Damage: " . $d . "\n";
            $this->pointsdevie -= $d;

            if($this->pointsdevie <= 0 && !$this->isDeadFlag) {
               $this->isDead();
           } 
      }

         public function attaque(){

            $attaquenormal = $this->getPuissance() / 10;
            return $attaquenormal;

         }

         public function attaquespe(){

            $attaquespe = $this->getPuissance() / 5;
            return $attaquespe;

         }

         public function esquive($i){

            $this->pointsdevie = $this->pointsdevie + $i;
            return 0;

         }

    }
?>