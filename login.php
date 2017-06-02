<?php 
$title = 'login - Thermofloor';
$message = '';
require_once('app/loginController.php');
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
        <form method="post" name="login">
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" class="form-control" id="username" aria-describedby="username" placeholder="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
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