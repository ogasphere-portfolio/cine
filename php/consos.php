<?php
require 'includes/header.php';

$extras = [
    [
        'Popcorn',
        'L',
        2.9
    ],
    [
        'Popcorn',
        'XL',
        4
    ],
    [
        'Chips',
        '50g',
        2.5
    ],
    [
        'M&M\'s',
        '100g',
        4
    ],
    [
        'Soda',
        '33cl',
        3.2
    ],
    [
        'Evian',
        '33cl',
        3
    ]
];?>



<ul>
<?php

// Je boucle sur le tableau d'extra
foreach ($extras as $extra) {
    ?>

    <li>
        <!-- 
            Chaque extra est lui même un tableau 
            Donc j'accède à chaque élément de mon tableau
            pour acceder aux différentes infos de l'extra
        -->
        <!-- Nom -->
        <?php echo $extra[0];?>
        <!-- Taille de la conso -->
        <?php echo $extra[1];?>
        <!-- Prix de la conso -->
        <?php echo $extra[2];?> €
    </li>
    
    <?php
}

?>
</ul>


<ul>
<?php
for ($index = 0; $index < count($extras); $index++) {

    ?>

    <li>
        <!-- 
            Chaque extra est lui même un tableau 
            Donc j'accède à chaque élément de mon tableau
            pour acceder aux différentes infos de l'extra
        -->
        <?php echo $extras[$index][0];?>
        <?php echo $extras[$index][1];?>
        <?php echo $extras[$index][2];?> €

    </li>
    
    
    <?php
}

?>
</ul>


<?php
require 'includes/footer.php';
?>

