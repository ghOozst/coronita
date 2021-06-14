<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Inicio</title>
</head>
<body>
    <?php include('Components/header.php')?>
    <main>
        <section class="presentation">
            <div class="introduction">
                <div class="intro-text">
                    <h1>Nueva colección de blusas</h1>
                    <p>
                        Siente comoda estando a la modo con muestra nuevos diseños en nuestras blusas
                    </p>
                </div>
                <div class="cta">
                    <button class="cta-add">Ver más</button>
                </div>
            </div>
            <div class="cover">
                <img id="mainImg" src="./img/Blusas/Todas.jpg" alt="matebook">
            </div>
        </section>
        <div class="laptop-select">
            <img class="dots" src="./img/dot.svg" alt="">
            <img class="dots" src="./img/dot-full.svg" alt="">
            <img class="dots" src="./img/dot-full.svg" alt="">
            <img class="dots" src="./img/dot-full.svg" alt="">
            <img class="dots" src="./img/dot-full.svg" alt="">
            <img class="dots" src="./img/dot-full.svg" alt="">
        </div>
        <?php include('Components/circules.php')?>
        <script src="scrips/scrip.js"></script>
        <script src="scrips/indexScript.js"></script>
    </main>
</body>
</html>