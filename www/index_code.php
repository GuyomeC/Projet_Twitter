<?php 

    $image1 = '<img class="photorecette" src="img/pudding.jpg"/>';
    $image2 = '<img class="photorecette" src="img/gateauchoco.avif"/>';

    $icon1 = '<img class="icone" src="img/sourire_vert-removebg-preview.png" alt="">';
    $icon2 = '<img class="icone" src="img/normal_jaune-removebg-preview.png" alt="">';
    $icon3 = '<img class="icone" src="img/pascontent_rouge-removebg-preview.png" alt="">';

    $recette = [

        [
            'Titre' => 'Gateau au chocolat',
            'Description' => "C est un super gateau très bon et très utile pour chaque anniverssaire
            ou pour une envie sucré le week-end",
            'Difficulté' => $icon1,
            'Temps' => 80,
            'Regime' => "vege",
            'image' => $image2
        ],
        [
            'Titre' => "Pudding a l'arsenic",
            'Description' => "Superbe pudding, si vous voulez assassiner des gaulois celui ci sera parfait.
            Mais attetion s'ils prennent de la potion magique ce pudding n'aura aucun effet",
            'Difficulté' => $icon3,
            'Temps' => 25,
            'Regime' => "sans gluten",
            'image' => $image1
        ]
    ];


    
?>