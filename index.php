
<?php include "head.php"?>


<body>

<?php include "header.php"?>

<!-- Content -->

<div class="container-fluid pl-0 pr-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/image6.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/image4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/image3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-fluid pl-0 pr-0 bee--lifestyle" id="lifestyle">
        <center><h2>Lifestyle</h2></center>
        <p>Les abeilles vivent en colonie. Elles
            forment une société très organisée, un peu comme une grande entreprise.
            Autour de la reine, dont la tâche unique est de pondre et pondre encore, jusqu’à 50 000 ouvrières s’activent
            avec ardeur. Dans la ruche, seules les quelques centaines de faux-bourdons paressent ! Durant leur
            existence, les abeilles exercent jusqu’à sept fonctions différentes : nettoyeuse, nourrice, architecte,
            manutentionnaire, ventileuse, gardienne et butineuse.
            elles vivent de 30 à 45 jours pour les abeilles au printemps et en été,
            plusieurs mois pour celles qui naissent à l’automne et permettent à la colonie de survivre à l’hiver et
            redémarrer le cycle.
        </p>
    </div>
</div>







<div class="container-fluid pl-0 pr-0 bee--hive" id="hive">
    <div class="row no-gutters">
        <div class="col-12 col-md-6  pl0 pr0">
            <img src="img/ruche2.jpg">
        </div>
        <div class="col-12 col-md-6">
            <center><h2>La Rûche</h2></center>
            <p>Une ruche est une structure presque
                fermée abritant une colonie d'abeilles. L’intérieur de la ruche est composé de rayons formés par des
                cellules hexagonales de cire d'abeille. Les abeilles utilisent ces cellules pour le stockage de la
                nourriture (miel et pollen), et pour le renouvellement de la population (œufs, larves et nymphes).
            </p>
        </div>
    </div>
</div>

<div class="container-fluid pl-0 pr-0 bee--queen" id="queen">
    <div class="row no-gutters">
        <div class="col-12 col-md-6">
            <center><h2>La Reine</h2></center>
            <p>La gelée royale est une substance produite par les abeilles ouvrières, grâce à des glandes contenues
                dans leur tête. Elle est gélatineuse, de couleur blanchâtre.
                La gelée royale apporte à la larve une substance qui permet de modifier son ADN pour en faire une
                abeille reine et non ouvrière.
            </p>
        </div>
        <div class="col-12 col-md-6 pl0 pr0">
            <img src="img/queen.jpg">
        </div>
    </div>

    <div>
        <div class="container-fluid pl-0 pr-0 bee--cause" id="cause">
            <center><h2>Les Causes</h2></center>
            <p>Nous avons été sensibilisés au rôle des abeilles dans l'écosystème. En effet, les abeilles favorisent la
                pollinisation des plantes sauvages et cultivées et elles sont sensibles aux traitements phytosanitaires.
                Depuis quelques années le sort des abeilles est devenu inquiétant : leur taux de surmortalité atteint 30
                à
                35 %, taux anormalement élevé qui atteint dans certains cas 50 % de pertes hivernales. Sur le banc des
                accusés : multiplication des substances chimiques dans l'environnement, présence de parasites, effets
                désastreux des monocultures, ravages du frelon asiatique, impact du changement climatique
            </p>
        </div>
    </div>
</div>

<div class="container-fluid pl-0 pr-0 bee--progress" id="progress">
    <div class="use">
        <p>Utilité de l'espèce :</p>
    </div>
    <div class="progress" style="width: 90%;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0"
             aria-valuemax="100"></div>
    </div>

    <div class="danger">
        <p>Risque d'extinction :</p>
    </div>
    <div class="progress" style="width: 90%;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0"
             aria-valuemax="100">
        </div>
    </div>

    <div class="winter">
        <p>Taux de mortalité durant l'hiver :</p>
    </div>
    <div class="progress" style="width: 90%;">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0"
             aria-valuemax="100"></div>
    </div>
</div>

<div class="gallery" id="gallery">
    <center><h2>Les abeilles en vidéos</h2></center>
    <div class="galleryVideos">
        <?php
        $API_key    = 'AIzaSyBxC80TZNyOjgjVxbFxnuxdojAeJyZuPUo';
        $channelID  = 'UC4manpkVsRoBBrQFBQqVJbA';
        $maxResults = 3;

        $videoList = json_decode(file_get_contents(
            'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.
            '&maxResults='.$maxResults.
            '&key='.$API_key.''
        ));

        foreach($videoList->items as $item){
            if(isset($item->id->videoId)){
                echo '<div class="youtube-video" style="display:block; padding: 0 40px;">
        <iframe width="380" height="220" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
        <h2 style="font-size: 15px">'. $item->snippet->title .'</h2>
    </div>';
            }
        }
        ?>
    </div>
    <center><a href="gallery.php" class="btn btn-warning btn--moreVideos">Voir plus de vidéos</a></center>
</div>
<div class="pollution">
    <h1 class="pollution--title">Les indices de pollution</h1>
    <h2 class="pollution--question">Dans quelle grande ville de France les abeilles sont-elles le mieux ?</h2>
    <div class="paris">

    </div>
    <div class="marseille">

    </div>
    <div class="lyon">

    </div>
    <div class="toulouse">

    </div>
    <div class="nice">

    </div>
    <div class="nantes">

    </div>
    <div class="montpellier">

    </div>
    <div class="strasbourg">

    </div>
    <div class="bordeaux">

    </div>
    <div class="lille">

    </div>
</div>



<?php include "footer.php"?>

