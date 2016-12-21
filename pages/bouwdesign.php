<?php

session_start();
require '../mydatabase.php';
if(isset($_SESSION["username"])) { ?>
    <html>
    <head>
        <title>
            Projectforum
        </title>
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
    <div id="navbar" class="container-fluid">
        <img src="../img/logo.png"/>
        <a class="navtext" href="../index.php">ROC Ter AA - Projectforum</a>
        <span class="right">
            <a class="logintext" href="../logout.php">Log uit</a>
        </span>
    </div>
    <div class="container" style="margin-top: 35px">
        <div class="page-header page-heading">
            <h1 class="pull-left">Bouw & Design</h1>
            <div class="clearfix"></div>
        </div>
        <table class="table forum table-striped">
            <thead>
            <tr>
                <th class="cell-stat"></th>
                <th>
                    <h3>Opdrachten</h3>
                </th>
                <th class="cell-stat text-center hidden-xs hidden-sm">Geplaatst</th>
                <th class="cell-stat text-center hidden-xs hidden-sm">Categorie</th>
                <th class="cell-stat-2x hidden-xs hidden-sm">Laatste reactie</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    </div>
    </body>
    </html>
<?php }
else { ?>
    <html>
    <head>
        <title>
            Projectforum
        </title>
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
    <div id="navbar" class="container-fluid">
        <img src="../img/logo.png"/>
        <a class="navtext" href="../index.php">ROC Ter AA - Projectforum</a>
        <span class="right">
        <a class="logintext" href="../login.html">Log in</a>
    </span>
    </div>
        <div class="container" style="margin-top: 35px">
                <h1 class="pull-left">U moet inloggen om de inhoud van deze pagina te kunnen bekijken.</h1>
        </div>
    </div>
    </body>
    </html>
<?php } ?>
