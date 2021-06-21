<?php
    require 'includes/header.php';
    // tableau contenant la liste des salles de notre ciné
    $rooms = [
        'Athéna', // 0
        'Dyonisos', // 1
        'Hadès', // 2
        'Zeus' // 3
    ];
?>

<section>
    <h2 class="page__title">
        Les salles de notre cinéma
    </h2>

    <ul>
        <?php
        // début de la boucle
        for ($index = 0; $index <= 3 ; $index++) { 
            ?>
            <li>
                <?php echo $rooms[$index]; ?>
            </li>
            <?php
        }
        // fin de la boucle
        ?>
    </ul>
    
    <hr>
    
    <ul>
        <?php
        // début de la boucle
        // syntaxe alternative pour écrire un for
        for ($index = 0; $index <= 3 ; $index++) :
            ?>
            <li>
                <?php echo $rooms[$index]; ?>
            </li>
            <?php
        endfor;
        // fin de la boucle
        ?>

    </ul>

    <hr>

    <ul>
        <?php
            // début de la boucle
            for ($index = 0; $index <= 3 ; $index++) {
                echo '<li class="list__item">' . $rooms[$index] . "</li>";
            }
            // fin de la boucle
        ?>
    </ul>

</section>

<?php
    require 'includes/footer.php';
?>