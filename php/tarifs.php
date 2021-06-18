<?php
require 'includes/header.php';
?>

<section>
    <h2 class="page__title">Tarifs</h2>

    <div class="prices">
    <div class="prices__lists">

        <div class="prices__list">
        <h3 class="prices__list-title">
            A l'unité
        </h3>
        <ul>
            <li class="prices__item">
            <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30</span> &euro;
            </li>
            <li class="prices__item">
            <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80</span> &euro;
            </li>
            <li class="prices__item">
            <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50</span> &euro;
            </li>
            <li class="prices__item">
            <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00</span> &euro;
            </li>
        </ul>
        </div>

        
        <div class="prices__list">
        <h3 class="prices__list-title">
            A l'unité
        </h3>
        <ul>
            <li class="prices__item">
            <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
            </li>
            <li class="prices__item">
            <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
            </li>
        </ul>
        </div>
        

    </div>

    <div class="prices__description">
        <p class="prices__description-line">
        <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
        <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
    </div>
    </div>
</section>

<section>
    <h2 class="page__title">Tarifs selon votre âge</h2>


    
    <ul>
        <?php
            // Je voudrais répéter le code suivant 99 fois
            // je voudrais répeter le <li> 
            // tant que $age ne vaut pas 99

            // Définir une valeur de départ pour la variable $age
            $age = 1;
            $tarifPlein = 8.3;
            $tarifReduit = 6.8;
            $tarifEnfant = 4.5;
            $montant = 0;
            while ($age <= 99) {

        ?>
        <li>
            <?php
                if ($age < 14) {
                    $montant = $tarifEnfant;
                } elseif ($age < 16 || $age > 60) {     
                    $montant = $tarifReduit;
                } else {
                    $montant = $tarifPlein;
                }
            ?>
            <strong>
                <?php echo $age; ?> an(s)
            </strong>
            , montant à payer : 
            <strong>
                <?= $montant; ?>€
            </strong>
        </li>
        <?php
            
            $age = $age + 1;
        }// fermeture de la boucle while
        
        ?>

    </ul>

</section>


<?php
require 'includes/footer.php';
?>