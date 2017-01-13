


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
                <h1 class="pull-left">Vraag je inloggegevens aan</h1>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label for="projectnaam">Voornaam</label>
                <input type="text" class="form-control" id="voornaam" name="voornaam">
            </div>
            <div class="form-group">
                <label for="omschrijving">Achternaam</label>
                <input type="text" class="form-control" id="achternaam" name="achternaam">
            </div>
            <div class="form-group">
                <label for="aantal-leden">Studentnummer</label>
                <input type="number" class="form-control" id="aantal-leden" name="aantal_leden">
            </div>
            <div class="form-group">
                <label for="opleverdatum">Vakcollege</label>
                <select class="form-control">
                  <option value="ict">ICT College</option>
                  <option value="business">Business College</option>
                  <option value="techniektechnologie">Techniek en Technologie College</option>
                  <option value="bouwdesign">Bouw en Design College</option>
                  <option value="dienstverlening">Dienstverlening College</option>
                  <option value="onderwijskinderopvang">Onderwijs en Kinderopvang</option>
                  <option value="zorgwelzijn">Zorg en Welzijn College</option>
                </select>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container" style="padding-left: 0px !important">
            <div class="col-md-12" style="padding-left: 0px !important">
                <div class="post">
                    <button href="#" type="submit" class="btn btn-primary btn-lg btn-block" name="send">Verstuur verzoek</button>
                </div>
            </div>
        </div>
</form>
</body>
</html>