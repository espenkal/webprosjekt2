<?php
$database = require('app/app.php');
$message = '';
// post content in form to database
if(isset($_POST['post'])){
    $title = $_POST['title'];
    $ingress = $_POST['ingress'];
    $body = $_POST['body'];
    $imgsrc = $_POST['imgsrc'];
    $category = $_POST['category'];
    // if not, add into database
    if($title & $ingress & $body & $imgsrc & $category) {
        $database->post($title, $body, $ingress, $imgsrc, $category);
        $message = 'the post has been added';
    } else {
        $message = 'all fields must be filled';
    }
}

if(!isset($_SESSION['isloggedin'])) {
    header('location:index.php');
}

include_once('partials/head.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Secret login</title>
    </head>

    <body>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="title" class="form-control" id="title" aria-describedby="title" placeholder="title" name="title">
                </div>
                <div class="form-group">
                    <label for="ingress">Ingress</label>
                    <input type="ingress" class="form-control" id="ingress" placeholder="ingress" name="ingress">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Body</label>
                    <textarea class="form-control" id="exampleTextarea" rows="5" name="body"></textarea>
                </div>
                <div class="form-group">
                    <label for="imgsrc">bilde</label>
                    <input type="imgsrc" class="form-control" id="imgsrc" placeholder="imgsrc" name="imgsrc">
                </div>
                <div class="form-group">
                    <label for="category">Velg kategori</label>
                    <select class="form-control" id="category" name="category">
                      <option>Smarthus</option>
                      <option>Varmeløsninger</option>
                      <option>Varmestyring</option>
                    </select>
                </div>
                <!--
            <div class="form-group">
                <label for="exampleInputFile">Last opp bilde</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="imgsrc">
            </div>
            -->

                <button type="submit" class="btn btn-primary" name="post">Submit</button>
            </form>

            <?php if($message !=""): ?>
            <hr>
            <div class="alert alert-danger" role="alert">
                <strong>Oh snap!</strong>
                <?php echo $message ?>
            </div>
            <?php endif; ?>
        </div>
    </body>

    </html>