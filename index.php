<?php 
$database = require 'app/app.php';
$table = $database->selectAll('posts');
$pagetitle = 'ThermoFloor';
include_once('partials/head.php');
?>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3" id="hero"><a href="artikkel1.html">Inn i varmen</a></h1>
    </div>
</div>
<!-- Kategorier -->
<div class="cont">
    <a href="varmelosninger.php" class="subcategory">
        <img src="img/icons/icon5w.png" alt="">
        <h2>Varmeløsninger</h2>
    </a>
    <a href="varmestyring.php" class="subcategory">
        <img src="img/icons/icon6w.png" alt="">
        <h2>Varmestyring</h2>
    </a>
    <a href="smarthus.php" class="subcategory">
        <img src="img/icons/icon1w.png" alt="">
        <h2>Smarthus</h2>
    </a>
</div>
<hr>
<!-- rader -->
<div class="container">
    <div class="row">
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
<!-- Produktkatalog -->
<a href="http://ipaper.ipapercms.dk/ThermoFloor/Katalog/">
    <div class="produktkatalog">
        <div class="produktwrap">
            <img src="img/produktkatalog.png" alt="">
            <div class="text-wrap">
                <h1><b>Last ned produktkatalogen for 2017</b></h1>
            </div>
        </div>
    </div>
</a>

<?php include_once('partials/footer.php'); ?>