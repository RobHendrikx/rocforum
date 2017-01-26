<?php
session_start();
require 'mydatabase.php';



if(isset($_SESSION["user"]) && $_SESSION["user"]["isadmin"] == 1) { ?>
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
        <a class="logintext"><?php echo 'Ingelogd als ' . $_SESSION['user']['username'] . ' | '?></a>
        <a class="logintext" href="logout.php">Log uit</a>
        </span>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a href="registration.php" type="button" value="test" class="btn btn-primary btn-block adminbtn" style="margin-top: 150px; font-size: 20px">Maak een nieuwe gebruiker aan</a>
            </div>
            <div class="col-sm-6">
                <a href="editmail.php" type="button" class="btn btn-info btn-block adminbtn" style="margin-top: 150px; font-size: 20px">Pas E-mailadressen aan</a>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php }
else {
    header('Location: login.html');
}
?>
