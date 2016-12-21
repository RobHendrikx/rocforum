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
                <h1 class="pull-left">Maak topic</h1>
                <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" class="form-control" id="usr">
            </div>
            <div class="form-group">
                <label for="omschr">Omschrijving</label>
                <textarea class="form-control" rows="5" id="omschrijving"></textarea>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="pull-right post">
            <a href="#" type="button" class="btn btn-primary btn-lg">Post topic</a>
        </div>
        <div>
            <a href="../post.php" type="button" class="btn btn-primary btn-lg">Upload afbeelding</a>
        </div>
    </div>
</div>
</body>
</html>