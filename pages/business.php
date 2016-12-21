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
            <h1 class="pull-left">Business</h1>
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
            <tr>
                <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                <td>
                    <h4><a style="text-decoration: none" href="#">Titel</a><br><small>Eerste zin omschrijving</small></h4>
                </td>
                <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
            </tr>
            </tbody>
        </table>
        <div class="pull-right post">
            <a href="../post.php" type="button" class="btn btn-primary btn-lg">Voeg een project toe</a>
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