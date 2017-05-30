<?php
$database = require 'app/app.php';
$sql = "SELECT * FROM posts WHERE category = 'smarthus'";
$table = $database->select($sql);
$title = 'Smarthus - ThermoFloor';
include_once('partials/head.php');
?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid category" id="smarthus">
        <div class="container">
            <img class="headericon" src="img/icons/icon1.png" alt="">
            <h1 class="display-3">Smarthus</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Smarte løsninger for smarte hjem</h2>
                <p>Har du strøm og trådløst nett har du det som trengs for å styre et moderne hjem - et såkalt smarthus. Vi har lest historiene om kjøleskapet som selv sender handlelisten, og slik kan det bli en gang i fremtiden, men foreløpig snakker vi om automatiserte prosesser for styring av hjemmet. Ting skal fikse seg selv! Lys, varmekabler, varmepumpe, panelovner, ytterdør, garasjeport, persienner, solskjerming, aircondition, alarmsystem, kamera, lyd og bilde styres fra én sentral enhet med en pc eller mobil. Målet er optimalisering, lavere forbruk og høyere komfort for deg og huset ditt.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4 category">
                <img class="icon" src="img/icons/icon1w.png" alt="">
                <p>Alt kan styres fra smartmobilen din via et styringssystem</p>
            </div>
            <div class="col-md-4 category">
                <img class="icon" src="img/icons/icon2w.png" alt="">
                <p>Automatisering gjør hverdagen enklere</p>
            </div>
            <div class="col-md-4 category">
                <img class="icon" src="img/icons/icon3w.png" alt="">
                <p>Du kan spare penger på å automatisere hjemmet ditt</p>
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