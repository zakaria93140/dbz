<?php 

    require 'assets/personnage.php';
    require 'assets/gentils.php';
    require 'assets/mechants.php';
    
    $Goku = new Gentils('Goku', 10000, 20000);
    $Freezer = new Mechants('Freezer', 5000, 40000);
    
    $Goku->PVloss(10000);


?>