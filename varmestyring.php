<?php
$database = require 'app/app.php';
$sql = "SELECT * FROM posts WHERE category = 'varmestyring'";
$table = $database->select($sql);
$pagetitle = 'Varmestyring - ThermoFloor';
include_once('partials/head.php');
?>
<!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid category" id="varmestyring">
        <div class="container">
            <img class="headericon" src="img/icons/icon6.png" alt="">
            <h1 class="display-3">Varmestyring</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Styr varmen med en termostat</h2>
                <p>Enkelt sagt er en termostat en bryter som holder styring på temperaturen. Den sørger for at det ikke blir for varmt og ikke for kaldt. Termostater finnes i mange utgaver, fra de som har en enkel av/på-funksjon og justering av temperatur, til mer avanserte typer med tidsstyring og muligheter for å la termostaten gjøre egne valg innenfor bestemte parametre for å effektivisere forbruket. Nå har termostatene også blitt så smarte at de «snakker» sammen seg imellom. Det er behovet ditt som bestemmer hvilken løsning du bør gå for – her hos Thermo-Floor AS har vi hele utvalget.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 category">
                <img class="icon" src="img/icons/icon6w.png" alt="">
                <p>Varmestyring innendørs kan gjøres med en termostat</p>
            </div>
            <div class="col-md-6 category">
                <img class="icon" src="img/icons/icon4w.png" alt="">
                <p>Varmestyring utendørs kan gjøres med en snøsmelte-termostat</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <h1>Artikler</h1>
            </div>
            <?php foreach ($table as $post): ?>
            <div class="col-md-6">
                <a href="post.php?id=<?php echo $post->id ?>">
                <img src="<?php echo $post->imgsrc ?>" class="img-fluid" alt="">
                <h3>
                    <?php echo $post->title ?>
                </h3>
            </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include_once('partials/footer.php');