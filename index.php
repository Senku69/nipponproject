<?php

require_once './isloggedin2.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/head.php';

    ?>

    <title>Japan Factory/ acceuil</title>
</head>

<body>
    <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/header.php'; ?>
    <section>
        <h1>Bienvenue sur Japan Factory </h1>
        <div id="carouselExemple" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExemple" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExemple" data-slide-to="1"></li>
                <li data-target="#carouselExemple" data-slide-to="2"></li>
                <li data-target="#carouselExemple" data-slide-to="3"></li>
                <li data-target="#carouselExemple" data-slide-to="4"></li>
                <li data-target="#carouselExemple" data-slide-to="5"></li>
                <li data-target="#carouselExemple" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="/image/jap_1760_fr.png" class="d-block">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Japon
                            <p>Le façinant mont-fuji et le festival des cerisiers en fleur</p>
                        </h2>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/image/01japon_jnto_miyajima_001.jpg" class="d-block">
                    <div class="carousel-caption d-none d-md-block texte2">
                        <h2>MIYAJIMA
                            <p>Sanctuaire shinto d'Itsukushima</p>
                        </h2>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/image/temple-or-kyoto-1024x768.jpg" class="d-block">
                    <div class="carousel-caption d-none d-md-block texte2">
                        <h2>Kinkaku-ji
                            <p>Le pavillion d'or</p>
                        </h2>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/image/shinkansen-guide.jpeg" class="d-block">
                    <div class="carousel-caption d-none d-md-block texte2">
                        <h2>shinkansen
                            <p>Le train le plus rapide du japon </p>
                        </h2>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/image/gundam front tokyo.jpg" class="d-block">
                    <div class="carousel-caption d-none d-md-block texte2">
                        <h2>Gundam Front Tokyo
                            <p>Driver city Exposition de la serie culte du même nom</p>
                        </h2>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/image/bigjapan-expo-2022.jpg" class="d-block">
                    <div class="carousel-caption d-none d-md-block texte2">
                        <h2>Japan expo ou Japex
                            <p>Expo culturel de l'Animation japonaise <br> Du 14 au 17 juillet 2022</p>
                        </h2>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="/image/visita-akihabara-grid.jpg" class="d-block">
                    <div class="carousel-caption d-none d-md-block texte2">
                        <h2>AKIHABARA-TOKYO
                            <p>Akihabara le quartier geek au Japon</p>
                        </h2>
                    </div>
                </div>
            </div>

            <a href="#carouselExemple" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="ture"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#carouselExemple" class="carousel-control-next" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <script>
            $('.carousel').carousel({

                interval: 1000 * 10

            });
        </script>
        <br>
        <article>
            <h1>Le façinant mont-fuji et le festival des cerisiers en fleur</h1>
            <h2>Pourquoi le mont-fuji fascine-t'il autant ?</h2>
            <div class="container">
                <img src="/image/japan-mount-fuji-large-1-.jpg" alt="Le Mont-fuji">
                <p><strong>Le Mont-fuji,</strong> le volcan sacrée au Japon est l'un des site touristiques qui attirais des millions de visiteurs chaque années, cepandent cette fréquentation fragilisant l'écosysteme il fut placer le 22 juin 2013 au patrimoines mondiale son le nom: <strong>FUJISAN, lieu sacré et source d'inspiration artistique</strong>. <br>
                    Avec 3 776 mètres d'altitude, il est le point culminant du Japon.<br>
                    Situé dans une région où se rejoignent les plaques tectoniques pacifique, eurasienne et philippine,
                    la montagne est un stratovolcan toujours considéré comme actif, sa dernière éruption certaine s'étant produite fin 1707, bien que le risque éruptif soit actuellement considéré comme faible. À son sommet a été construit un observatoire météorologique et malgré les conditions climatiques rigoureuses, <br>
                    la montagne est une destination extrêmement populaire en particulier pour les Japonais, qu'ils soient <strong>shintoïstes ou bouddhistes,</strong> en raison de sa forme caractéristique et du symbolisme religieux traditionnel qu'il représente.</p>
                <a href="">lire la suite</a>
            </div>
            <h2>Le festival des cerisiers qu'est ce que c'est ?</h2>
            <div class="container2">
                <img src="/image/voir-floraison-cerisiers-okinawa-japon-nakijin-sakura-hanami-5-1024x795.jpg
                " alt="">
                <p>le festival des cerisiers en fleurs plus connue sous le nom d'<strong>Hanami</strong> est une fete traditionnel ou des millier de personne viennent voir les sakura fleurir,
                    les sakura en emerveille plus d'un. Preuve en ais qu'aux yeux de tous, la floraison des sakura constitue la meilleure saison pour planifier un voyage au Japon.
                    Le pays entier vit au rythme de ces bourgeons préts à éclore, Cet événement rythme la vie japonaise. On l’appelle le hanami, quand fin mars-début avril, les Japonais convergent pour pique-niquer en admirant les cerisiers (sakuras) en fleurs.</p>
                <div>
                    <img src="/image/geisha.1573699.w740.jpg" alt="">
                    <p><strong>D’Okinawa à Hokkaido</strong>, on surveille fébrilement la météo qui annonce la floraison des arbres et le lancement de la saison. Aux premiers signes du printemps, on installe des nappes dans les parcs pour festoyer sous les bourgeons qui éclosent en de fines fleurs roses. Si un pétale tombe dans un verre, <strong>trinquez de plus belle</strong>, ce n’est que le signe de la chance à venir !
                        <br> Cette coutume a été instaurée <strong>au 8e siècle</strong>, alors que le hanami correspondait à l’époque de la plantation du riz. Les paysans déposaient des offrandes aux pieds des arbres et buvaient du saké, priant pour que les riches récoltes soient au rendez-vous.

                        Un siècle plus tard, <strong>la cour impériale de Kyoto</strong> reprenait cette tradition, en ajoutant aux sakés les plus fins des mets raffinés, qu’elle dégustait en déclamant des poèmes. Les samouraïs, et enfin le peuple, adoptèrent ce rituel.

                        Cette fête populaire est devenue une <strong>tradition nationale</strong> à partir du 17e siècle. Aujourd’hui encore, l’époque des cerisiers en fleurs reste synonyme de renouveau : elle correspond au début de l’année fiscale et universitaire.
                    </p><a href="">lire la suite</a>

                </div>
            </div>

        </article>
        <div class="haut-page">
            <a href="/" class="boutons bouton-lght">Haut de page</a>
        </div>

    </section>
    <?php require_once '/Users/ledar/Desktop/projetNIPPON/public/include2/footer.php'; ?>
</body>

</html>