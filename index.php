<?php
    require 'combat.php';
?>

<html>

    <div class="Aff"></div>
    <form>
    <?php
    

    if(!$PersonnageSelection){
        ?>
        <input type="button" value="Goku">
        <input type="button" value="Vegeta">
        <input type="button" value="Piccolo">
        <input type="button" value="Freezer">
        <input type="button" value="Cell">
        <input type="button" value="Boo">
<?php
    }

    
    ?>
    </form>
</html>