<?php
$database = require 'app/app.php';
$sql = "SELECT * FROM posts WHERE category = 'varmeløsninger'";
$table = $database->select($sql);
$title = 'Kontakt - ThermoFloor';
include_once('partials/head.php');
?>
    <!-- første rad -->
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-md-4">
                <h3>Kontakt oss gjerne direkte:</h3>
                <ul class="a">
                    <li>Tlf: 61 18 77 77</li>
                    <li>Fax: 61 18 77 70</li>
                    <li>post@thermo-floor.no</li>
                </ul>
                <ul class="a">
                    <li>Østre Totenveg 24</li>
                    <li>2816 Gjøvik</li>
                    <li>Norway</li>
                </ul>
            </div>
            <div class="col-md-8">
                <div id="bergen" class="map"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <h2 id="kontakt">Kontaktskjema</h2>
                <p>Skriv din henvendelse her så tar vi kontakt!</p>
                <p><i>*Vi minner om at saker som omhandler <b>faktura, ordre, reklamasjon og vareretur </b> må tas via utførende installatør.</i></p>

                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Din email adresse">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSted">Sted</label>
                        <input type="input" class="form-control" id="exampleInputSted" aria-describedby="sted" placeholder="Gjøvik">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Hva gjelder det?</label>
                        <select class="form-control" id="exampleSelect1">
                                <option>Produkter</option>
                                <option>Installasjon</option>                                
                                <option>Ris/ros</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Tekstfelt</label>
                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send henvendelse</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <?php include_once('partials/footer.php'); ?>