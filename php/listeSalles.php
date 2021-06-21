<?php
    require 'includes/header.php';
    // tableau contenant la liste des sallesde notre ciné
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
        <li>
            <?php echo $rooms[0]; ?>
        </li>
    </ul>

</section>

<?php
    require 'includes/footer.php';
?>