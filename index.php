<?php
session_start();
require 'mydatabase.php';

$pdoQuery1 = "SELECT * FROM post WHERE `catid` = 1";
$pdoResult1 = $conn->query($pdoQuery1);
$pdoRowCount1 = $pdoResult1->rowCount();

$pdoQuery2 = "SELECT * FROM post WHERE `catid` = 2";
$pdoResult2 = $conn->query($pdoQuery2);
$pdoRowCount2 = $pdoResult2->rowCount();

$pdoQuery3 = "SELECT * FROM post WHERE `catid` = 3";
$pdoResult3 = $conn->query($pdoQuery3);
$pdoRowCount3 = $pdoResult3->rowCount();

$pdoQuery4 = "SELECT * FROM post WHERE `catid` = 4";
$pdoResult4 = $conn->query($pdoQuery4);
$pdoRowCount4 = $pdoResult4->rowCount();

$pdoQuery5 = "SELECT * FROM post WHERE `catid` = 5";
$pdoResult5 = $conn->query($pdoQuery5);
$pdoRowCount5 = $pdoResult5->rowCount();

$pdoQuery6 = "SELECT * FROM post WHERE `catid` = 6";
$pdoResult6 = $conn->query($pdoQuery6);
$pdoRowCount6 = $pdoResult6->rowCount();

$pdoQuery7 = "SELECT * FROM post WHERE `catid` = 7";
$pdoResult7 = $conn->query($pdoQuery7);
$pdoRowCount7= $pdoResult7->rowCount();

try{
    $sql = "SELECT * FROM post WHERE `catid` = 1 ORDER BY idpost DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result1 = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try{
    $sql = "SELECT * FROM post WHERE `catid` = 2 ORDER BY idpost DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result2 = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try{
    $sql = "SELECT * FROM post WHERE `catid` = 3 ORDER BY idpost DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result3 = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try{
    $sql = "SELECT * FROM post WHERE `catid` = 4 ORDER BY idpost DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result4 = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try{
    $sql = "SELECT * FROM post WHERE `catid` = 5 ORDER BY idpost DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result5 = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try{
    $sql = "SELECT * FROM post WHERE `catid` = 6 ORDER BY idpost DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result6 = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

try{
    $sql = "SELECT * FROM post WHERE `catid` = 7 ORDER BY idpost DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result7 = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}
/*echo '<pre>';
var_dump($result);
echo '<pre>';
die();*/

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
        <a class="logintext"><?php echo 'Ingelogd als ' . $_SESSION['user']['username'] . ' | '?></a>
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
                        <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["isadmin"] == 1) { ?>
                            <a href="admin.php" type="button" class="btn btn-primary btn-sm">Admin pagina</a>
                        <?php } ?>
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
                        <th class="cell-stat text-center hidden-xs hidden-sm">Opdrachten</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Laatste opdracht</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                        <td>
                            <h4><a href="pages/ict.php">ICT College</a><br><small>Opdrachten voor de studenten van het ICT College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount1; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result1["userid"] . '<br/>' . $result1["datum"] ?><small><?php $result1["datum"]?></small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/business.php">Business College</a><br><small>Opdrachten voor de studenten van het Business College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount2; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result2["userid"] . '<br/>' . $result2["datum"] ?><small><?php $result2["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/techniektechnologie.php">Techniek & Technologie College</a><br><small>Opdrachten voor de studenten van het Techniek en Technologie College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount3; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result3["userid"] . '<br/>' . $result3["datum"] ?><small><?php $result3["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/bouwdesign.php">Bouw & Design College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount4; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result4["userid"] . '<br/>' . $result4["datum"] ?><small><?php $result4["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/dienstverlening.php">Dienstverlening College</a><br><small>Opdrachten voor de studenten van het Dienstverlening College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount5; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result5["userid"] . '<br/>' . $result5["datum"] ?><small><?php $result5["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/onderwijskinderopvang.php">Onderwijs & Kinderopvang College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount6; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result6["userid"] . '<br/>' . $result6["datum"] ?><small><?php $result6["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/zorgwelzijn.php">Zorg & Welzijn College</a><br><small>Opdrachten voor de studenten van het Zorg & Welzijn College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount7; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result7["userid"] . '<br/>' . $result7["datum"] ?><small><?php $result7["datum"]?></small></td>                    </tr>
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
        <a class="logintext" href="registration.php" style="padding: 15px">Registreer</a>
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
                        <th class="cell-stat text-center hidden-xs hidden-sm">Opdrachten</th>
                        <th class="cell-stat-2x hidden-xs hidden-sm">Laatste opdracht</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                        <td>
                            <h4><a href="pages/ict.php">ICT College</a><br><small>Opdrachten voor de studenten van het ICT College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount1; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result1["userid"] . '<br/>' . $result1["datum"] ?><small><?php $result1["datum"]?></small></td>
                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/business.php">Business College</a><br><small>Opdrachten voor de studenten van het Business College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount2; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result2["userid"] . '<br/>' . $result2["datum"] ?><small><?php $result2["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/techniektechnologie.php">Techniek & Technologie College</a><br><small>Opdrachten voor de studenten van het Techniek en Technologie College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount3; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result3["userid"] . '<br/>' . $result3["datum"] ?><small><?php $result3["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/bouwdesign.php">Bouw & Design College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount4; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result4["userid"] . '<br/>' . $result4["datum"] ?><small><?php $result4["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/dienstverlening.php">Dienstverlening College</a><br><small>Opdrachten voor de studenten van het Dienstverlening College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount5; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result5["userid"] . '<br/>' . $result5["datum"] ?><small><?php $result5["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/onderwijskinderopvang.php">Onderwijs & Kinderopvang College</a><br><small>Opdrachten voor de studenten van het Bouw & Design College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount6; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result6["userid"] . '<br/>' . $result6["datum"] ?><small><?php $result6["datum"]?></small></td>                    </tr>
                    <tr>
                        <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                        <td>
                            <h4><a href="pages/zorgwelzijn.php">Zorg & Welzijn College</a><br><small>Opdrachten voor de studenten van het Zorg & Welzijn College</small></h4>
                        </td>
                        <td class="text-center hidden-xs hidden-sm"><?php echo $pdoRowCount7; ?></td>
                        <td class="hidden-xs hidden-sm"><?php echo 'door ' . $result7["userid"] . '<br/>' . $result7["datum"] ?><small><?php $result7["datum"]?></small></td>                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>
<?php }
?>
