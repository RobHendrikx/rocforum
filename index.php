<?php
session_start();
require 'mydatabase.php';
if(isset($_SESSION["username"])) { ?>
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
        <a class="logintext"><?php echo 'Ingelogd als ' . $_SESSION['username'] . ' | '?></a>
        <a class="logintext" href="logout.php">Log uit</a>
    </span>
    </div>
    <div class="container">
        <div class="page-header-margin-fix page-header page-heading">
            <div class="container" style="margin-top: 35px">
                <div class="page-header page-heading">
                    <h1 class="pull-left">Colleges</h1>
                    <div class="pull-right post">
                        <a href="post.php" type="button" class="btn btn-primary btn-sm">Voeg een project toe</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p class="lead">Kies hier voor welk college u de opdrachten voor wil zien</p>

                <table class="table forum table-striped">
                    <thead>
                    <tr>
                        <th class="cell-stat"></th>
                        <th>
                            <h3>Colleges</h3>
                        </th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                        <td>
                            <h4><a href="pages/ict.php">ICT College</a><br><small>Opdrachten voor de studenten van het ICT College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/business.php">Business College</a><br><small>Opdrachten voor de studenten van het Business College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/techniektechnologie.php">Techniek & Technologie College</a><br><small>Opdrachten voor de studenten van het Techniek en Technologie College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/bouwdesign.php">Bouw & Design College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/dienstverlening.php">Dienstverlening College</a><br><small>Opdrachten voor de studenten van het Dienstverlening College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/onderwijskinderopvang.php">Onderwijs & Kinderopvang College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/zorgwelzijn.php">Zorg & Welzijn College</a><br><small>Opdrachten voor de studenten van het Zorg & Welzijn College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
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
        <span class="right">
        <a class="logintext" href="register.php" style="padding: 15px">Vraag inloggegevens aan</a>
        </span>
    </span>
    </div>
    <div class="container">
        <div class="page-header-margin-fix page-header page-heading">
            <div class="container" style="margin-top: 35px">
                <div class="page-header page-heading">
                    <h1 class="pull-left">Colleges</h1>
                    <div class="pull-right post">
                        <a href="post.php" type="button" class="btn btn-primary btn-sm">Voeg een project toe</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <p class="lead">Kies hier voor welk college u de opdrachten voor wil zien</p>
                <table class="table forum table-striped">
                    <thead>
                    <tr>
                        <th class="cell-stat"></th>
                        <th>
                            <h3>Colleges</h3>
                        </th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Topics</th>
                        <th class="cell-stat text-center hidden-xs hidden-sm">Posts</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Last Post</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                        <td>
                            <h4><a href="pages/ict.php">ICT College</a><br><small>Opdrachten voor de studenten van het ICT College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">9 542</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">89 897</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">John Doe</a><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/business.php">Business College</a><br><small>Opdrachten voor de studenten van het Business College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/techniektechnologie.php">Techniek & Technologie College</a><br><small>Opdrachten voor de studenten van het Techniek en Technologie College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/bouwdesign.php">Bouw & Design College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/dienstverlening.php">Dienstverlening College</a><br><small>Opdrachten voor de studenten van het Dienstverlening College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/onderwijskinderopvang.php">Onderwijs & Kinderopvang College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/zorgwelzijn.php">Zorg & Welzijn College</a><br><small>Opdrachten voor de studenten van het Zorg & Welzijn College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">6532</a></td>
                        <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                        <td class="hidden-xs hidden-sm">by <a href="#">Jane Doe</a><br><small><i class="fa fa-clock-o"></i> 1 years ago</small></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>
<?php }
?>
