<?php
session_start();

if(!isset($_SESSION["username"])){
header("Location: login.html");
}


$projectnaam = $omschrijving = $aantal_leden = $opleverdatum = $email_opdrachtgever = $telefoon_opdrachtgever = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectnaam = test_input($_POST["projectnaam"]);
    $omschrijving = test_input($_POST["omschrijving"]);
    $aantal_leden = test_input($_POST["aantal_leden"]);
    $opleverdatum = test_input($_POST["opleverdatum"]);
    $email_opdrachtgever = test_input($_POST["email_opdrachtgever"]);
    $telefoon_opdrachtgever = test_input($_POST["telefoon_opdrachtgever"]);

    echo '<pre>';
    print_r($projectnaam);
    print_r($omschrijving);
    print_r($aantal_leden);
    print_r($opleverdatum);
    print_r($email_opdrachtgever);
    print_r($telefoon_opdrachtgever);
    echo '<pre>';

    die();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    if(is_null($data) || $data == '') {
        $data = null;
    }
    return $data;

}

?>


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
        <a class="logintext" href="logout.php">Log uit</a>
    </span>
</div>
<form class="container" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="container" style="margin-top: 35px; padding-left: 0px; padding-right: 30px">
            <div class="page-header page-heading">
                <h1 class="pull-left">Voeg een project toe</h1>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label for="projectnaam">Projectnaam</label>
                <input type="text" class="form-control" id="projectnaam" name="projectnaam">
            </div>
            <div class="form-group">
                <label for="omschrijving">Projectomschrijving</label>
                <textarea class="form-control" rows="5" id="omschrijving" name="omschrijving"></textarea>
            </div>
            <div class="form-group">
                <label for="aantal-leden">Aantal projectleden</label>
                <input type="number" class="form-control" id="aantal-leden" name="aantal_leden">
            </div>
            <div class="form-group">
                <label for="opleverdatum">Opleverdatum</label>
                <input class="form-control" type="date" id="opleverdatum" name="opleverdatum">
            </div>
            <div class="form-group">
                <label for="email-opdrachtgever">E-mail opdrachtgever</label>
                <input type="email" class="form-control" id="email-opdrachtgever" name="email_opdrachtgever">
            </div>
            <div class="form-group">
                <label for="telefoon-opdrachtgever"">Telefoonnummer opdrachtgever (niet verplicht)</label>
                <input type="number" class="form-control" id="telefoon-opdrachtgever" name="telefoon_opdrachtgever">
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container" style="padding-left: 0px !important">
            <div class="col-md-6" style="padding-left: 0px !important">
                <div class="post">
                    <a href="#" type="button" class="btn btn-primary btn-lg btn-block">Upload afbeelding</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="post">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Voeg het project toe</button>
                </div>
            </div>
        </div>
</form>
</body>
</html>