<?php 

    require 'assets/personnage.php';
    require 'assets/gentils.php';
    require 'assets/mechants.php';

    $Goku = new Gentils('Songoku', 10000, 20000);
    $Vegeta = new Gentils('Vegeta', 10000, 20000);
    $Piccolo = new Gentils ('Piccolo',5000,10000);
    $Freezer = new Mechants('Freezer', 5000, 30000);
    $Cell = new Mechants('Cell',5000, 20000);
    $Boo = new Mechants ('Majin Buu',5000,10000);


    $Goku2 = new Gentils('Songoku2', 10000, 20000);
    $Vegeta2 = new Gentils('Vegeta2', 10000, 20000);
    $Piccolo2 = new Gentils ('Piccolo2',5000,10000);
    $Freezer2 = new Mechants('Freezer2', 5000, 30000);
    $Cell2 = new Mechants('Cell2',5000, 20000);
    $Boo2 = new Mechants ('Majin Buu2',5000,10000);

    $PersonnageSelection;
    $PersonnageEnemy;
    $Score = 0;
    $Argent = 0;
    

    echo ("Bonjour, choisissez votre combattant !'\n");
    $choix = (string)readline("Liste des combattants 1 - Goku, 2 - Vegeta, 3 - Freezer, 4 - Cell, 5 - Piccolo, 6 - Boo \n");

    switch($choix){

        case 1:
        case "Goku":
            $PersonnageSelection = $Goku;
            break;
        case 2:
        case "Vegeta":
        $PersonnageSelection = $Vegeta;
            break;
        case 3:
        case "Freezer":
        $PersonnageSelection = $Freezer;
            break;
        case 4:
        case "Cell":
        $PersonnageSelection = $Cell;
            break;
        case 5:
        case "Piccolo":
        $PersonnageSelection = $Piccolo;
            break;
        case 6:
        case "Boo":
        $PersonnageSelection = $Boo;
            break;
        default:
        echo "Veuillez choisir un personnage dans la liste. ";
        return;
    }

    
    echo $PersonnageSelection->getNom(). " ! Préparez vous au combat ! \nVous devez effectuer 5 victoires d'affilés pour gagner la partie. \n" ;
   
    //boucle des combats
    while($PersonnageSelection->getPV()>0){

        $idenemy = rand(1,6);
        
        switch($idenemy){

            case 1:
                $PersonnageEnemy = $Goku2;
                break;
            case 2:
                $PersonnageEnemy = $Vegeta2;
                break;
            case 3:
                $PersonnageEnemy = $Freezer2;
                break;
            case 4:
                $PersonnageEnemy = $Cell2;
                break;
            case 5:
                $PersonnageEnemy = $Piccolo2;
                break;
            case 6:
                $PersonnageEnemy = $Boo2;
                break;
        }
        while($PersonnageEnemy->deadStatus() == true){

            $idenemy = rand(1,6);
        
        switch($idenemy){

            case 1:
                $PersonnageEnemy = $Goku2;
                break;
            case 2:
                $PersonnageEnemy = $Vegeta2;
                break;
            case 3:
                $PersonnageEnemy = $Freezer2;
                break;
            case 4:
                $PersonnageEnemy = $Cell2;
                break;
            case 5:
                $PersonnageEnemy = $Piccolo2;
                break;
            case 6:
                $PersonnageEnemy = $Boo2;
                break;
        }

        }
        echo $PersonnageEnemy->getNom() . " veut vous affronter en duel ! \nUn combat éclate !\n";
        while($PersonnageEnemy->getPV() > 0){
            if($PersonnageSelection->getPV()>0){
            $choix = (int)readline("Que voulez-vous faire ? : 1 - Envoyer une boule d'énergie, 2 - Effectuer un coup physique, 3 - Esquiver, ");
            if( $Score > 1 ){
                 echo "4 - ". $PersonnageSelection->special()[0]; 
                } 
            echo " /n ";
            $choixenemy = rand(1,3);
            switch($choix){

                case 1: 
                    $PersonnageEnemy->PVloss($PersonnageSelection->attaquespe());
                    echo $PersonnageSelection->getNom() . " envoie des boules d'énergies à " . $PersonnageEnemy->getNom() . "\n";
                    echo $PersonnageEnemy->getNom() . " a perdu " . $PersonnageSelection->attaquespe() . ", il lui reste actuellement " . $PersonnageEnemy->getPV() . "\n";
                    if($PersonnageSelection->getTitre() == "Gentil"){
                        $PersonnageSelection->enrage();
                        $PersonnageSelection->bienveillanceMax();
                    } else if ($PersonnageEnemy->getTitre() == "Méchant"){
                        $PersonnageEnemy->sanguin();
                        $PersonnageSelection->malveillanceMax();
                    }
                    break;
                case 2: 
                    $PersonnageEnemy->PVloss($PersonnageSelection->attaque());
                    echo $PersonnageSelection->getNom() . " met des coups à " . $PersonnageEnemy->getNom() . "\n";
                    echo $PersonnageEnemy->getNom() . " a perdu " . $PersonnageSelection->attaque() . ", il lui reste actuellement " . $PersonnageEnemy->getPV() . "\n";
                    if($PersonnageSelection->getTitre() == "Gentil"){
                        $PersonnageSelection->enrage();
                        $PersonnageSelection->bienveillanceMax();
                    } else if ($PersonnageEnemy->getTitre() == "Méchant"){
                        $PersonnageEnemy->sanguin();
                        $PersonnageSelection->malveillanceMax();
                    }
                    break;
                    
                case 3: 
                    $PersonnageSelection->PVloss($PersonnageEnemy->attaque());
                    $PersonnageSelection->esquive($PersonnageEnemy->attaque());
                    echo $PersonnageSelection->getNom() . " esquive les attaques de " . $PersonnageEnemy->getNom() . "\n";
                    if($PersonnageSelection->getTitre() == "Gentil"){
                        $PersonnageSelection->enrage();
                        $PersonnageSelection->bienveillanceMax();
                    } else if ($PersonnageEnemy->getTitre() == "Méchant"){
                        $PersonnageEnemy->sanguin();
                        $PersonnageSelection->malveillanceMax();
                    }
                    break;

                case ($Score > 0 && 4):
                        $PersonnageEnemy->PVloss($PersonnageSelection->special()[1]);
                        echo $PersonnageSelection->getNom() . " effectue un " . $PersonnageSelection->special()[0] . "\n";
                        echo $PersonnageEnemy->getNom() . " a perdu " . $PersonnageSelection->special()[1] . ", il lui reste actuellement " . $PersonnageEnemy->getPV() . "\n";
                        if($PersonnageSelection->getTitre() == "Gentil"){
                            $PersonnageSelection->enrage();
                            $PersonnageSelection->bienveillanceMax();
                        } else if ($PersonnageEnemy->getTitre() == "Méchant"){
                            $PersonnageEnemy->sanguin();
                            $PersonnageSelection->malveillanceMax();
                        }

                
                }
          switch($choixenemy){

                case 1: 
                    $PersonnageSelection->PVloss($PersonnageEnemy->attaquespe());
                    echo $PersonnageEnemy->getNom() . " envoie des boules d'énergies à " . $PersonnageSelection->getNom() . "\n";
                    echo $PersonnageSelection->getNom() . " a perdu " . $PersonnageEnemy->attaquespe() . ", il lui reste actuellement " . $PersonnageSelection->getPV() . "\n";
                    if($PersonnageSelection->getTitre() == "Gentil"){
                        $PersonnageSelection->enrage();
                        $PersonnageSelection->bienveillanceMax();
                    } else if ($PersonnageEnemy->getTitre() == "Méchant"){
                        $PersonnageEnemy->sanguin();
                        $PersonnageSelection->malveillanceMax();
                    }
                    break;
                case 2: 
                    $PersonnageSelection->PVloss($PersonnageEnemy->attaque());
                    echo $PersonnageEnemy->getNom() . " met des coups à " . $PersonnageSelection->getNom() . "\n";
                    echo $PersonnageSelection->getNom() . " a perdu " . $PersonnageEnemy->attaque() . ", il lui reste actuellement " . $PersonnageSelection->getPV() . "\n";
                    if($PersonnageSelection->getTitre() == "Gentil"){
                        $PersonnageSelection->enrage();
                        $PersonnageSelection->bienveillanceMax();
                    } else if ($PersonnageEnemy->getTitre() == "Méchant"){
                        $PersonnageEnemy->sanguin();
                        $PersonnageSelection->malveillanceMax();
                    }
                    break;
                case 3: 
                    $PersonnageEnemy->PVloss($PersonnageSelection->attaque());
                    $PersonnageEnemy->esquive($PersonnageSelection->attaque());
                    echo $PersonnageEnemy->getNom() . " esquive les attaques de " . $PersonnageSelection->getNom() . "\n";
                    if($PersonnageSelection->getTitre() == "Gentil"){
                        $PersonnageSelection->enrage();
                        $PersonnageSelection->bienveillanceMax();
                    } else if ($PersonnageEnemy->getTitre() == "Méchant"){
                        $PersonnageEnemy->sanguin();
                        $PersonnageSelection->malveillanceMax();
                    }
                    break;

            }
            
            echo "Il reste " . $PersonnageEnemy->getPV() . " à " . $PersonnageEnemy->getNom() . "\n";
            echo "et Il reste " . $PersonnageSelection->getPV() . " à " . $PersonnageSelection->getNom() . "\n";
        
    
        } else {
            echo $PersonnageSelection->getNom() . " est mort";
            return;

        }
          
    }
    echo $PersonnageSelection->getNom() . " a remporté la victoire ! \n";
    $Score++;
    $Argent = $Argent + 20;
    if ($Score > 4) {
        echo "La partie est terminée";
        return;
    }
}



   
    
    

    /**while ($Goku->getPointsdevie()>0){
        $Goku->PVloss($Freezer->getPuissance());
    }**/


?>