<?php
$database = require 'app/app.php';
$sql = "SELECT * FROM posts WHERE category = 'varmeløsninger'";
$table = $database->select($sql);
$pagetitle = 'Varmeløsninger - ThermoFloor';
include_once('partials/head.php');
?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid category" id="varmelosninger">
        <div class="container">
            <img class="headericon" src="img/icons/icon5.png" alt="">
            <h1 class="display-3">Varmeløsninger</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>På sokkelesten i alle rom</h2>
                <p>Nye byggeforskrifter har gjort kravene og behovet for oppvarming i nye hus til noe helt annet i dag enn tidligere. Boligene er nå så godt isolert at kostbare løsninger som vannbåren-og jordvarme strengt tatt ikke er nødvendig. Nedbetalingstiden blir lang. Bruk av strøm er både raskt og effektivt, og i kombinasjon med en liten peisovn har man det som skal til for å holde kulda unna i en normal enebolig. Systemer for varmestyring kombinert med moderne termostater vil sørge for at gulvvarmen kun er aktiv når behovet er der. Slik kan du spare både penger og miljøet ved for eksempel å redusere gulvvarmen om natten og på tider av døgnet hvor ingen er hjemme. Med varme føtter kan man fint senke innetemperaturen et par grader uten at rommet føles kaldere. Slik blir det lek på bare føtter i alle rom.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 category">
                <img class="icon" src="img/icons/icon7w.png" alt="">
                <p>Varmeløsninger på bad</p>
            </div>
            <div class="col-md-4 category">
                <img class="icon" src="img/icons/icon8w.png" alt="">
                <p>Varmeløsninger utendørs</p>
            </div>
            <div class="col-md-4 category">
                <img class="icon" src="img/icons/icon5w.png" alt="">
                <p>Varmeløsninger i oppholdsrom</p>
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