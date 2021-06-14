<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contacto.style.css">
    <title>Contacto</title>
</head>
<body>
    <?php include('Components/header.php')?>
    <main>
        <div class="content">
            <h1> Conoce un poco acerca de nosotros</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/3QP8z_kaN1w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h2>Visita nuestras redes sociales</h2>
            <div class="socialmedia">
                <img class="socialImg" src="./img/Social Media/facebook.svg" alt="">
                <img class="socialImg" src="./img/Social Media/youtube.svg" alt="">
                <img class="socialImg" src="./img/Social Media/instagram.svg" alt="">
            </div>
            <h2>¡Haznos una visita!</h2>
            <div id="map"></div>
        </div>
        <?php include('Components/circules.php')?>
    </main>
    <script src="scrips/scrip.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>
</html>