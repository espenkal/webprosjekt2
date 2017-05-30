<?php
   switch ($post['id']) {
    case 3:
        echo '<div class="card" style="width: 20rem;">
            <img class="card-img-top" src="img/17.jpg" style="height:200px;" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">MILL MB1200DN G</h4>
                <p class="card-text">Det enkle, men elegante designet fra Mill har blitt en kundefavoritt. I Norge er panelovnene i glass fra Mill de mest solgte.</p>
            </div>
        </div>';
        break;
    case 4:
        echo '<div class="card" style="width: 20rem;">
            <img class="card-img-top" src="img/20.jpg" style="height:200px;" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">ESH 316 Endevender RF</h4>
                <p class="card-text">Denne kombi- dimmer/teromstaten lar deg sette opp en natt-scenario, der lysene går av når familien legger seg, men lysene i gangen og på badet forblir dimmet slik at man kan finne veien. Og det aktiveres med ett trykk på bryteren.</p>
            </div>
        </div>';
        break;
    case 5:
        echo '<div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top" src="img/vl1.png" style="height:200px;" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">TF Sticky mat</h4>
                        <p class="card-text">TF Sticky Mat kan installeres under parkett, belegg, teppe, kork, fliser og nær sagt alle gulv som tåler varme.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="card">
                    <img class="card-img-top" src="img/vl2.png" style="height:200px;" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">TF SVK varmekabel</h4>
                        <p class="card-text">TF SVK har allsidige bruksområder både innendørs og utendørs.</p>
                    </div>
                </div>
            </div>
        </div>';
        break;
       case 6:
           echo '<div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top" src="img/sh2.png" style="height:200px;" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">MULTIREG® Z-WAVE</h4>
                        <p class="card-text">Z-wave har mange følere som automatisk kontrollerer temperatur, og regulerer varmen for deg.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="card">
                    <img class="card-img-top" src="img/sh3.png" style="height:200px;" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">ID Lock 101</h4>
                        <p class="card-text">Kan kobles til smarthus systemet og lar deg låse opp med pin kode, eller via smarthus appen.</p>
                    </div>
                </div>
            </div>
        </div>';
           break;
    default:
        echo '';
}