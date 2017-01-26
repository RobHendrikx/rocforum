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
    <form class="container" method="post" action="">
        <div class="container" style="margin-top: 35px; padding-left: 0px; padding-right: 30px">
            <div class="page-header page-heading">
                <h1 class="pull-left">Verander E-mailadressen van de administratoren</h1>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label for="ict">ICT College</label>
                <input type="email" class="form-control" id="ict" name="ict">
            </div>
            <div class="form-group">
                <label for="business">Business College</label>
                <input type="email" class="form-control" id="business" name="business">
            </div>
            <div class="form-group">
                <label for="techniek">Techniek & Technologie College</label>
                <input type="email" class="form-control" id="techniek" name="techniek">
            </div>
            <div class="form-group">
                <label for="bouw">Bouw & Design College</label>
                <input type="email" class="form-control" id="bouw" name="bouw">
            </div>
            <div class="form-group">
                <label for="dienst">Dienstverlening College</label>
                <input type="email" class="form-control" id="dienst" name="dienst">
            </div>
            <div class="form-group">
                <label for="onderwijs">Onderwijs & Kinderopvang College</label>
                <input type="email" class="form-control" id="onderwijs" name="onderwijs">
            </div>
            <div class="form-group">
                <label for="zorg">Zorg & Welzijn College</label>
                <input type="email" class="form-control" id="zorg" name="zorg">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container" style="padding-left: 0px !important">
            <div class="col-md-12" style="padding-left: 0px !important">
                <div class="post">
                    <a href="#" type="button" class="btn btn-primary btn-lg btn-block">Update emailadressen</a>
                </div>
            </div>
        </div>
    </form>
    </body>
    </html>
<?php }
else {
    header('Location: login.html');
}
?>
