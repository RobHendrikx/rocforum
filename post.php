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
<div class="container">
    <div class="page-header-margin-fix page-header page-heading">
        <div class="container" style="margin-top: 35px; padding-left: 0px; padding-right: 30px">
            <div class="page-header page-heading">
                <h1 class="pull-left">Voeg een project toe</h1>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label for="titel">Projectnaam</label>
                <input type="text" class="form-control" id="projectnaam">
            </div>
            <div class="form-group">
                <label for="omschr">Projectomschrijving</label>
                <textarea class="form-control" rows="5" id="omschrijving"></textarea>
            </div>
            <div class="form-group">
                <label for="omschr">Aantal projectleden</label>
                <input type="number" class="form-control" id="aantal-leden" >
            </div>
            <div class="form-group">
                <label for="omschr">Opleverdatum</label>
                <input class="form-control" type="date" value="2016-12-16" id="opleverdatum">
            </div>
            <div class="form-group">
                <label for="titel">E-mail opdrachtgever</label>
                <input type="text" class="form-control" id="email-opdrachtgever">
            </div>
            <div class="form-group">
                <label for="titel">Telefoonnummer opdrachtgever (niet verplicht)</label>
                <input type="text" class="form-control" id="telefoon-opdrachtgever">
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
                    <a href="#" type="button" class="btn btn-primary btn-lg btn-block">Post topic</a>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>