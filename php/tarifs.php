<?php
require 'includes/header.php';
// Je définis les variables utilisées pour 
// - afficher les tarifs
// - calculer les tarifs
$tarifPlein = 8.3;
$tarifReduit = 6.8;
$tarifEnfant = 4.5;
$tarifSupplement3D = 1;
$reductionAbo = 10;
$reductionAbo25 = 30;
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
                    <span class="prices__item-desc">Tarif Plein</span> 
                    <span class="prices__item-value"><?= $tarifPlein ?></span> &euro;
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Réduit</span> 
                    <span class="prices__item-value"><?= $tarifReduit ?></span> &euro;
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Tarif Enfant</span> 
                    <span class="prices__item-value"><?= $tarifEnfant ?></span> &euro;
                </li>
                <li class="prices__item">
                    <span class="prices__item-desc">Supplément 3D</span> 
                    <span class="prices__item-value"><?= $tarifSupplement3D ?></span> &euro;
                </li>
            </ul>
        </div>

        
        <div class="prices__list">
        <h3 class="prices__list-title">
            Cartes d'abonnement
        </h3>
        <ul>
            <li class="prices__item">
            <span class="prices__item-desc">5 places</span> 
            <span class="prices__item-value">-<?php echo $reductionAbo ?>%</span>
            </li>
            <li class="prices__item">
            <span class="prices__item-desc">5 places -25ans </span> 
            <span class="prices__item-value">-<?= $reductionAbo25; ?>%</span>
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

            $montant = 0;
            while ($age <= 99) {

                // Je calcule le tarif à l'unité 
                // de la place en fonction de l'age
                if ($age < 14) {
                    $montant = $tarifEnfant;
                } elseif ($age < 16 || $age > 60) {     
                    $montant = $tarifReduit;
                } else {
                    $montant = $tarifPlein;
                }

                // Calculer le tarif de la place si la personne utilise
                // sa carte d'abonnement

                // 5 places -10%
                // Si la personne utilise sa carte, le tarif sera celui calculé
                // précédement moins 10%, dans le cas ou elle a plus de 25 ans
                
                // Si $age est >= à 25
                if ($age >= 25) {
                    // On stocke dans une nouvelle variable $montantAbo le montant qui sera
                    // $montant - 10%
                    $montantAbo = $montant - ($montant / 100 * $reductionAbo);
                    // alternative
                    // $montantAbo = $montant * 0.9;
                }
                // Sinon
                else {
                    // On stocke dans une nouvelle variable $montantAbo le montant qui sera
                    // $montant - 20%
                    $montantAbo = $montant - ($montant / 100 * $reductionAbo25);
                    // 5 places -25ans -20%
                    // Si elle a moins de 25 ans, la tarif sera le montant précédent
                    // moins 20%
                }
                // var_dump($montantAbo);
     
                ?>
                <li>
                    <strong>
                        <?php echo $age; ?> an(s)
                    </strong>
                    , montant à payer : 
                    <strong>
                        <?= $montant; ?>€
                    </strong>

                    Tarif avec abonnement :
                    
                    <strong>
                        <?= $montantAbo; ?>€
                    </strong>

                </li>
                <?php
                
                $age = $age + 1;
            } // fermeture de la boucle while
        ?>

    </ul>

</section>


<?php
require 'includes/footer.php';
?>