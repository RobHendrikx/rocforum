<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.html");
}
require 'mydatabase.php';

$username = @$_POST['username'];
$pw = @$_POST['password'];
$confirm = @$_POST['confirm'];

$password = password_hash($pw, PASSWORD_BCRYPT, array('cost' => 10));


if(isset($_POST['submit'])) {
    if ($_POST["password"] == $_POST["confirm"]) {
        try {
            $sql = "INSERT INTO users (username, password)
                        VALUES (:user, :pass)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $username);
            $stmt->bindParam(':pass', $password);

            // insert one row
            if ($stmt->execute()) {
                echo "Aangemaakt";
            }else{
                echo "Er ging iets mis bij het posten van het project";
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    else {
        echo 'Wachtwoorden komen niet overeen';
    }
}


if(isset($_SESSION["user"]) && $_SESSION["user"]["isadmin"] == 1) { ?>
<html>
<head>
    <title>
        Projectforum
    </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
</head>
<body>
<div id="navbar" class="container-fluid">
    <img src="img/logo.png"/>
    <a class="navtext" href="index.php">ROC Ter AA - Projectforum</a>
    <span class="right">
        <a class="logintext" href="logout.php">Log uit</a>
    </span>
</div>
<form class="container" method="post" action="registration.php">
    <div class="container" style="margin-top: 35px; padding-left: 0px; padding-right: 30px">
        <div class="page-header page-heading">
            <h1 class="pull-left">Voeg een gebruiker toe</h1>
            <div class="clearfix"></div>
        </div>
        <div class="form-group">
            <label for="username">Gebruikersnaam</label>
            <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="password">Wachtwoord</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="confirm">confirm</label>
            <input type="password" class="form-control" id="confirm" name="confirm">
        </div>
        <div class="clearfix"></div>
    </div>
    <!--<div class="form-group g-recaptcha" data-sitekey="6LdsjxIUAAAAAL7jmZOZhzRwM1fnWflcpjlXU6sx"></div>-->
    <div class="container" style="padding-left: 0px !important">
        <div class="col-md-12" style="padding-left: 0px !important">
            <div class="post">
                <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit" value="Maak gebruiker aan"></input>
            </div>
        </div>
    </div>
</form>
</body>
</html>
<?php } else { ?>
    <html>
    <head>
        <title>
            Projectforum
        </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
    <div id="navbar" class="container-fluid">
        <img src="img/logo.png"/>
        <a class="navtext" href="index.php">ROC Ter AA - Projectforum</a>
        <span class="right">
            <a class="logintext" href="login.html">Log in</a>
        </span>
    </div>
    <div class="container" style="margin-top: 35px">
        <h1 class="pull-left">U bent niet bevoegd om een account aan te maken. Klik <a href="register.php" style="padding: 15px">hier</a> om een account aan te vragen.</h1>
    </div>
    </div>
    </body>
    </html>
<?php } ?>

