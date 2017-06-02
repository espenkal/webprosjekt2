<?php 
$database = require 'app/app.php';
$post = $database->fetch($_GET['id']);
$pagetitle = $post['title'];
include_once('partials/head.php');
?>

<!-- første rad -->
<div class="container">
    <div class="row">
        <div class="col-sm-12"><img class="img-fluid" src="<?php echo $post['imgsrc'] ?>" alt="img alt">
        </div>
    </div>
</div>

<!-- artikkel -->
<div class="container">
    <div class="row">
        <div class="col-sm-12" style="padding-top:30px;">
            <h1>
                <?php echo $post['title'] ?>
            </h1>
            <p><small>Av Ola Nordmann | Publisert 1. Mars 2017</small></p>

            <?php include_once('partials/social.php'); ?>
        </div>
    </div>

    <div class="row" style="padding-top:30px;">
        <div class="col-sm-12">
            <h2>
                <?php echo $post['ingress'] ?>
            </h2>
        </div>
    </div>

    <div class="row" style="padding-top:20px;">
        <?php echo $post['body'] ?>
    </div>
    
    <?php include_once('partials/products.php'); ?>
    <?php include_once('partials/contact.php'); ?>
</div>

<?php include_once('partials/footer.php'); ?>