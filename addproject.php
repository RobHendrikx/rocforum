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

  <div class="region">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 ">
            <h1 class="center p-2">Voeg een project toe</h1>
            <hr class="colorgraph">




    <form class="form-horizontal">
      <div class="form-group">
        <label for="productNaam" class="col-sm-2 control-label">project naam</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="productNaam" placeholder="voeg projectnaam in">
        </div>
      </div>
      <div class="form-group">
        <label for="eigenaar" class="col-sm-2 control-label">omschrijving project</label>
        <div class="col-sm-10">
      <textarea type="text" class="form-control" id="merk" placeholder="beschrijving project"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="merk" class="col-sm-2 control-label">SBU  voor dit project</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" value="42" id="example-number-input" >
        </div>
      </div>
      <div class="form-group">
        <label for="startproject" class="col-sm-2 control-label">Startproject</label>
        <div class="col-xs-10">
    <input class="form-control" type="date" value="2016-12-16" id="example-date-input">
      </div>
      </div>
      <div class="form-group">
        <label for="startproject" class="col-sm-2 control-label">opleverdatum</label>
        <div class="col-xs-10">
    <input class="form-control" type="date" value="2016-12-16" id="example-date-input">
      </div>
      </div>
      <div class="form-group">
        <label for="merk" class="col-sm-2 control-label">Aantal projectleden</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" value="2" id="example-number-input" >
        </div>
      </div>

      <div class="form-group">
        <label for="merk" class="col-sm-2 control-label">Benodigde kennis</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" id="merk" placeholder="Geef op welke programmeertalen, apparatuurkennis, etc nodig zijn"></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="merk" class="col-sm-2 control-label">Contact opdrachtgever</label>
        <div class="col-sm-10">
          <textarea type="text" class="form-control" id="merk" rows="1" placeholder="Welke extra huisregels gelden voor het product het product"></textarea>
        </div>
      </div>




      <div class="m-b-2">
        <div class=" col-sm-12 col-md-12">
          <button  class="btn btn-default col-md-12">Voer het projec in de databank</button>
        </div>
      </div>

    </form>
  </div>
</div>
</div>

</div>

  </nav>
  </body>
