<?php
require 'includes/header.php';

$extras = [
    [
        "nom" => 'Popcorn',
        "taille" => 'L',
        "prix" => 2.9
    ],
    [
        "nom" => 'Popcorn',
        "taille" => 'XL',
        "prix" => 4
    ],
    [
        "nom" => 'Chips',
        "taille" => '50g',
        "prix" => 2.5
    ],
    [
        "nom" => 'M&M\'s',
        "taille" => '100g',
        "prix" => 4
    ],
    [
        "nom" => 'Soda',
        "taille" => '33cl',
        "prix" => 3.2
    ],
    [
        "nom" => 'Evian',
        "taille" => '33cl',
        "prix" => 3
    ]
];?>



<ul>
<?php
foreach ($extras as $extra) {

    ?>

    <li>
        <?php echo $extra["nom"];?>
        <?php echo $extra["taille"];?>
        <?php echo $extra["prix"];?> €
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
        <?php echo $extras[$index]["nom"];?>
        <?php echo $extras[$index]["taille"];?>
        <?php echo $extras[$index]["prix"];?> €
    </li>
    
    
    <?php
}

?>
</ul>


<?php
require 'includes/footer.php';
?>

