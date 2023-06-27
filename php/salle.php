<?php
require 'includes/header.php';
// définir une variable qui va contenir
// tous les films dispo dans notre ciné

// Un tableau est une variable qui contient 
// plusieurs éléments
// $tableau = ['element1', 'element2', ...];
$films = [
    "La cité de la peur", // élément 0
    "Drunk", // élément 1
    "Kaamelott", // élément 2
    "Black Dynamite", // élément 3
    "Le cinquième élément" // élément 4
];

?>

<h2 class="page__title">
    La liste des films de notre cinéma
</h2>

<ul>
    <?php
        // on l'initialise à 0
        $numeroElement = 0; 
        // MAis elle vaudra dans la boucle
        // successivement 1 puis 2 puis 3 puis 4
        // et quand elle vaudra 5, la boucle s'arretera
        while ($numeroElement <= 4) {
            
            ?>
            <li>
                <!-- 
                    On accede à l'élément du tableau de films
                    dont le numéro est stocké dans la variable $numeroElemen
                 -->
                <?php echo $films[$numeroElement]; ?>
            </li>
            
            <?php
            // On ajoute 1 à notre variable
            // $numeroElement
            $numeroElement = $numeroElement + 1;
        }
    ?>

<?php
        $numeroElement = 0; 
        while ($numeroElement <= 4) :
            ?>
            <li>
                <?php echo $films[$numeroElement]; ?>
            </li>
            
            <?php
            $numeroElement = $numeroElement + 1;
        endwhile;
    ?>

    <?php
        // La boucle for est composée de 3 éléments obligatoires
        // l'initialistation
        // La condition de sortie
        // l'incrémentation de la variable
        for ($numeroElement = 0; $numeroElement <= 4; $numeroElement++) {
            ?>
            <li>
                <!-- 
                    On accede à l'élément du tableau de films
                    dont le numéro est stocké dans la variable $numeroElemen
                 -->
                <?php echo $films[$numeroElement]; ?>
            </li>
            <?php
        }
    ?>
</ul>


<?php
require 'includes/footer.php';
?>
