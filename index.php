<?php 

    require 'assets/personnage.php';
    require 'assets/gentils.php';
    require 'assets/mechants.php';
    
    $Goku = new Gentils('Sangoku', 10000, 20000);
    $Freezer = new Mechants('Freezer', 5000, 40000);
    
    while ($Goku->getPointsdevie()>0){
        $Goku->PVloss($Freezer->getPuissance());
    }


?>