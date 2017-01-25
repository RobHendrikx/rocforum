<?php

session_start();
require '../mydatabase.php';
if(isset($_SESSION["username"])) {
    try{

        $sql = "SELECT * FROM projectforum.post WHERE catid = 2 ORDER BY post.datum DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }



    ?>
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
                <th class="cell-stat-2x hidden-xs hidden-sm">Laatste reactie</th>
                <th class="cell-stat text-center hidden-xs hidden-sm">Afgerond</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($result as $key => $value): ?>
                <tr>
                    <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                    <td>
                        <h4><a href="post.php?id=<?php echo $value['idpost']?>"><?php echo $value["projectnaam"] ?></a><br><small><?php echo $value["userid"] ?></small></h4>
                    </td>
                    <td class="text-center hidden-xs hidden-sm"><?php echo $value["datum"] ?></td>
                    <td class="hidden-xs hidden-sm">door <?php echo $value["userid"] ?><br><small><i class="fa fa-clock-o"></i> 3 months ago</small></td>
                    <td class="text-center hidden-xs hidden-sm">
                        <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["isadmin"] == 1) { ?>
                            <input type="checkbox" value="">
                        <?php } else { ?>
                            <input type="checkbox" onclick="return false;" readonly="readonly">
                        <?php }?>
                    </td>
                </tr>
            <?php endforeach; ?>

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