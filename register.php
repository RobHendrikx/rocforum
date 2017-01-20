<?php
/*    if(isset($_POST['send'])){
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $privatekey = "6LdsjxIUAAAAAMNK6kGU9eJb27mhkYOgtCX3CluZ";

        $response = file_get_contents($url."?secret=".$privatekey."&response=".$_POST['g-recaptcha-response']."&remoteip=".$_SERVER['REMOTE_ADDR']);
        $data = json_decode($response);

        if(isset($data->success) && $data->success == true) {
            header('Location: mail.php');
        }else {
            echo 'Captcha failed';
        }
    }
*/?>

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
<form class="container" method="post" action="mail.php">
        <div class="container" style="margin-top: 35px; padding-left: 0px; padding-right: 30px">
            <div class="page-header page-heading">
                <h1 class="pull-left">Vraag je inloggegevens aan</h1>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label for="voornaam">Voornaam</label>
                <input type="text" class="form-control" id="voornaam" name="voornaam">
            </div>
            <div class="form-group">
                <label for="achternaam">Achternaam</label>
                <input type="text" class="form-control" id="achternaam" name="achternaam">
            </div>
            <div class="form-group">
                <label for="email">Emailadres</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="studentnummer">Studentnummer</label>
                <input type="number" class="form-control" id="studentnummer" name="studentnummer">
            </div>
            <div class="form-group">
                <label for="colleges">Vakcollege</label>
                <select name="colleges" id="colleges" class="form-control">
                    <option value="business">Business College</option>
                    <option value="ict">ICT College</option>
                    <option value="techniektechnologie">Techniek en Technologie College</option>
                    <option value="bouwdesign">Bouw en Design College</option>
                    <option value="dienstverlening">Dienstverlening College</option>
                    <option value="onderwijskinderopvang">Onderwijs en Kinderopvang</option>
                    <option value="zorgwelzijn">Zorg en Welzijn College</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--<div class="form-group g-recaptcha" data-sitekey="6LdsjxIUAAAAAL7jmZOZhzRwM1fnWflcpjlXU6sx"></div>-->
        <div class="container" style="padding-left: 0px !important">
            <div class="col-md-12" style="padding-left: 0px !important">
                <div class="post">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="send">Verstuur verzoek</button>
                </div>
            </div>
        </div>
</form>
</body>
</html>