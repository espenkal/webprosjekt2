<?php 
$database = require 'app/app.php';
$table = $database->selectAll('posts');
$pagetitle = 'Om oss - ThermoFloor';
include_once('partials/head.php');
?>
<!-- første rad -->
<div class="container">
    <div class="row">
        <div class="col-sm-12"><img class="img-fluid" src="img/tf.jpg" alt="img alt"></div>
        <div class="col-12">
            <br>
            <h1>Thermo-Floor AS fyller 25år i 2017!</h1>
            <p>Din opplevde verdi må være høyere enn prisen vi forlanger. For å lykkes er innovasjon og produktutvikling det viktigste arbeidet vi kan bedrive. Vi må kunne tilby nye løsninger, som dekker kundens behov, på en bedre måte. <br>

                <b>Uansett fremtid – den er elektrisk - og slik skal vi sørge for at Thermo-Floor AS også runder 50.</b></p>
        </div>
        <div class="col-sm-12">
            <p>Vår største kundegruppe består av elektroinstallatører i hele Norge, vi jobber også en del mot industrikunder. Vi har en aktiv innkjøpspolitikk og leverandørutvikling, som sikrer vårt fokus om hele tiden å tilby nye produkter og tjenester mot både nåværende og nye kunder og markeder.</p><br>
        </div>

        <div class="col-sm-12">
            <h4>Våre tjenester</h4>
            <p>Alle målsatte tegninger fra våre kunder beregnes av oss, og ved forespørsel utarbeider vi også en leggeanvisning. Vi har salgskonsulenter som stadig er på Norges-turné, og kan være behjelpelige med å legge demonstrasjonsgulv. Vår lange erfaring skal hele tiden ligge i bunn som et gode for kundene våre, uten ekstra kostnad for sluttkunde eller våre elektroinstallatører.</p><br>
        </div>

        <div class="col-sm-12">
            <h4>Produktene våre</h4>
            <p>Fortsatt er varmekabelmatter vårt viktigste produkt, men vi tilbyr også tradisjonelle varmekabler og mange typer selvbegrensende kabler for snøsmelting og frostsikring. Sikring av tak og nedløp, noe som begrenser ising og andre vinterlige utfordringer, er også en del av vårt brede tilbud av termostater. I tillegg har vi et omfattende utvalg av produkter som naturlig hører inn i elektrobransjens sortiment, for eksempel nødvendigheten av limpistoler og annet verktøy.</p><br>
        </div>
    </div>
</div>
<?php include('partials/footer.php'); ?>