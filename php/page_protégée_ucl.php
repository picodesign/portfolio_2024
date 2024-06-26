<?php
session_start();

// Vérifier si l'utilisateur est connecté, le rediriger vers la page de connexion s'il ne l'est pas
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login_ucl.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Université Catholique de Lille</title>
    <link rel="Shortcut icon" type="x-icon" href="../logo.svg">
    <link rel="shortcut icon" type="image/x-icon" href="../logo.ico">
    <link rel="icon" type="image/x-icon" href="../logo.ico">
    <meta name="description" content="Animation sur After Effects des différents emblèmes redessiné par Graphéine pour l'université catholique de Lille.">
    <meta name="author" content="Pico Design - Alessandro Ansquer Capiluppi">
    <meta name="keywords" content="Université Catholique de Lille, Graphéine, Stage 2023, Refonte emblème, Animation, After Effects, Emblème, Changements, Redessiné, Graphisme, Design, Portfolio, Alessandro, Alessandro Ansquer, Ansquer, Alessandro Capiluppi, DNMADE, Book, Designer graphique, Conception visuelle">
    <link rel="canonical" href="https://picodesign.fr/ucl">
    <!-- Balises Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Université Catholique de Lille">
    <meta property="og:url" content="https://picodesign.fr/php/login_ucl.html">
    <meta property="og:description" content="Animation sur After Effects des différents emblèmes redessiné par Graphéine pour l'université catholique de Lille.">
    <!-- Balises Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Université Catholique de Lille">
    <meta name="twitter:description" content="Animation sur After Effects des différents emblèmes redessiné par Graphéine pour l'université catholique de Lille.">
    <!-- font -->
    <link rel="stylesheet" href="../css/font/font.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/work/workmain.css">
    <link rel="stylesheet" href="../css/work/ucl.css">
    <!-- JavaScript -->
    <script src="../js/main.js" defer></script>
    <script src="../js/app.js" defer></script>
</head>

<body>

    <!-- Couverture -->
    <div class="cover">
        <ul class="menu">
            <li class="lien"><a href="../index.html">Projects</a></li>
            <li class="lien"><a href="../about.html">About</a></li>
            <li class="lien"><a href="/php/page_protégée_ucl.php">FR</a></li>
            <li class="lien"><a href="/php/page_protégée_ucl.php">IT</a></li>
        </ul>
        <div class="titre">Université Catholique de Lille</div>
        <div class="image">
            <div id="player"></div>
            <script src="https://www.youtube.com/iframe_api"></script>
            <script>
                let player;

                function onYouTubeIframeAPIReady() {
                    player = new YT.Player('player', {
                        height: '600px',
                        videoId: 'OMOQ3gCphvI',
                        playerVars: {
                            'autoplay': 1,
                            'controls': 1,
                            'rel': 0,
                            'modestbranding': 1,
                            'loop': 1,
                            'fs': 1,
                            'iv_load_policy': 3,
                            'start': 167,
                            'enablejsapi': 1,
                            'origin': window.location.origin
                        },
                        events: {
                            'onReady': onPlayerReady
                        }
                    });
                }

                function onPlayerReady(event) {
                    // volume range
                    // player.setVolume(20);
                    player.setVolume(0);
                }
            </script>

        </div>
        <div class="colab">
            Collaboration avec
            <span><a href="https://www.grapheine.com">Graphéine</a> pour <br><a href="https://www.univ-catholille.fr/">Université Catholique de Lille</a></span>
            <span>Stage 2023</span>
        </div>
    </div>

    <!-- Contenu en dessous de la ligne de flottaison -->
    <!-- video principale en double et le reste en petit-->
    <div class="description">
        <h5>Contexte</h5>
        <h6>Afin d'améliorer la compréhension des changements liés à la refonte de l'emblème de l'université, j'ai commencé une animation sur After Effects.</h6>
        <p>L'animation parcourt les différents emblèmes pour se concentrer sur les changements apportés au dernier, redessiné par Graphéine.</p>
    </div>
    <div class="below-fold">
        <div class="gallery_mid">
            <div class="double-container">
                <video controls autoplay loop muted class="gallery-image">
                    <source type="video/webm" src="/images/ucl/debut_motion.webm" />
                    <source type="video/mp4" src="/images/ucl/debut_motion.mp4" />
                </video>
                <div class="image-title"></div>
            </div>

            <div class="image-container">
                <video control="false" autoplay="true" loop class="gallery-image">
                    <source type="video/webm" src="/images/ucl/Clefs_refonte.webm" />
                    <source type="video/mp4" src="/images/ucl/Clefs_refonte.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video control="false" autoplay="true" loop class="gallery-image">
                    <source type="video/webm" src="/images/ucl/Etoiles_refonte.webm" />
                    <source type="video/mp4" src="/images/ucl/Etoiles_refonte.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video control="false" autoplay="true" loop class="gallery-image">
                    <source type="video/webm" src="/images/ucl/Lion_refonte.webm" />
                    <source type="video/mp4" src="/images/ucl/Lion_refonte.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
            <div class="image-container">
                <video control="false" autoplay="true" loop class="gallery-image">
                    <source type="video/webm" src="/images/ucl/Livre_refonte.webm" />
                    <source type="video/mp4" src="/images/ucl/Livre_refonte.mp4" />
                </video>
                <div class="image-title"></div>
            </div>
        </div>

    </div>
    <!-- fin -->
    <!-- footer deconection -->
    <div class="logout"><a href="logout_cap.php">Se déconnecter</a></div>
</body>

</html>