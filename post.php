<?php
session_start();

if(!isset($_SESSION["username"])){
    header("Location: login.html");
}

$projectErr = "";
$emailErr = "";
$omschrErr = "";
$projectnaam = $omschrijving = $aantal_leden = $opleverdatum = $email_opdrachtgever = $telefoon_opdrachtgever = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include("mydatabase.php");
    if (!empty($_POST["projectnaam"] && !empty($_POST["omschrijving"]) && !empty($_POST["email_opdrachtgever"]))){
        $projectnaam = test_input($_POST["projectnaam"]);
        $omschrijving = test_input($_POST["omschrijving"]);
        $aantal_leden = test_input($_POST["aantal_leden"]);
        $opleverdatum = test_input($_POST["opleverdatum"]);
        $email_opdrachtgever = test_input($_POST["email_opdrachtgever"]);
        $telefoon_opdrachtgever = test_input($_POST["telefoon_opdrachtgever"]);
        $catid = test_input($_POST["cat_id"]);
        $categorie = test_input($_POST["categorie"]);


        try {

            $sql = "INSERT INTO post (projectnaam, omschrijving, aantal_leden, opleverdatum, email_opdrachtgever, telefoon_opdrachtgever, catid, categorie)
                        VALUES (:pnaam, :omschrijving, :aantal_leden, :opleverdatum, :email_opdrachtgever, :telefoon_opdrachtgever, :catid, :categorie)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':pnaam', $projectnaam);
            $stmt->bindParam(':omschrijving', $omschrijving);
            $stmt->bindParam(':aantal_leden', $aantal_leden);
            $stmt->bindParam(':opleverdatum', $opleverdatum);
            $stmt->bindParam(':email_opdrachtgever', $email_opdrachtgever);
            $stmt->bindParam(':telefoon_opdrachtgever', $telefoon_opdrachtgever);
            $stmt->bindParam(':categorie', $categorie);
            $stmt->bindParam(':catid', $catid);

            // insert one row
            if ($stmt->execute()) {
                header('Location: index.php');
            }else{
                echo "Er ging iets mis bij het posten van het project";
            }

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    } else{
        if(empty($_POST['projectnaam'])){
            $projectErr = true;
        }
        if(empty($_POST['omschrijving'])){
            $omschrErr = true;
        }
        if(empty($_POST['email_opdrachtgever'])){
            $emailErr = true;
        }
    }
    /*$omschrijving = test_input($_POST["omschrijving"]);
    $aantal_leden = test_input($_POST["aantal_leden"]);
    $opleverdatum = test_input($_POST["opleverdatum"]);
    $email_opdrachtgever = test_input($_POST["email_opdrachtgever"]);
    $telefoon_opdrachtgever = test_input($_POST["telefoon_opdrachtgever"]);
    $catid = test_input($_POST["cat_id"]);
    $categorie = test_input($_POST["categorie"]);*/

    /*try {

      $sql = "INSERT INTO post (projectnaam, omschrijving, aantal_leden, opleverdatum, email_opdrachtgever, telefoon_opdrachtgever, catid, categorie)
                        VALUES (:pnaam, :omschrijving, :aantal_leden, :opleverdatum, :email_opdrachtgever, :telefoon_opdrachtgever, :catid, :categorie)";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':pnaam', $projectnaam);
      $stmt->bindParam(':omschrijving', $omschrijving);
      $stmt->bindParam(':aantal_leden', $aantal_leden);
      $stmt->bindParam(':opleverdatum', $opleverdatum);
      $stmt->bindParam(':email_opdrachtgever', $email_opdrachtgever);
      $stmt->bindParam(':telefoon_opdrachtgever', $telefoon_opdrachtgever);
      $stmt->bindParam(':categorie', $categorie);
      $stmt->bindParam(':catid', $catid);

      // insert one row
      if ($stmt->execute()) {
          header('Location: index.php');
      }else{
        echo "Er ging iets mis bij het posten van het project";
      }

    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    die();*/
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
<form class="container" method="post" action="">
        <div class="container" style="margin-top: 35px; padding-left: 0px; padding-right: 30px">
            <div class="page-header page-heading">
                <h1 class="pull-left">Voeg een project toe</h1>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <label for="cat_id">Project College</label>
                <select class="form-control" name="cat_id" id="cat_id">
                  <option value="1">ICT College</option>
                  <option value="2">Business College</option>
                  <option value="3">Techniek & Technologie College</option>
                  <option value="4">Bouw & Design College</option>
                  <option value="5">Dienstverlening College</option>
                  <option value="6">Onderwijs & Kinderopvang College</option>
                  <option value="7">Zorg & Welzijn College</option>
                </select>
            </div>
            <hr>
            <div class="form-group">
                <label for="projectnaam">Projectnaam *</label>
                <input type="text" class="form-control <?php if($projectErr == true){ echo 'error';} ?>" id="projectnaam" value="<?php echo isset($_POST["projectnaam"]) ? $_POST["projectnaam"] : ''; ?>" name="projectnaam" <?php if($projectErr == true){ echo 'placeholder="Verplicht veld"';} ?>>
            </div>
            <div class="form-group">
                <label for="omschrijving">Projectomschrijving *</label>
                <textarea class="form-control <?php if($omschrErr == true){ echo 'error';} ?>" rows="5" id="omschrijving" name="omschrijving" <?php if($omschrErr == true){ echo 'placeholder="Verplicht veld"';} ?>><?php echo isset($_POST["omschrijving"]) ? $_POST["omschrijving"] : ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="email-opdrachtgever">E-mail opdrachtgever *</label>
                <input type="email" class="form-control <?php if($emailErr == true){ echo 'error';} ?>" id="email-opdrachtgever" value="<?php echo isset($_POST["email_opdrachtgever"]) ? $_POST["email_opdrachtgever"] : ''; ?>" name="email_opdrachtgever" <?php if($emailErr == true){ echo 'placeholder="Verplicht veld"';} ?>>
            </div>
            <div class="form-group">
                <label for="opleverdatum">Opleverdatum</label>
                <input class="form-control" type="date" id="opleverdatum" name="opleverdatum">
            </div>
            <div class="form-group">
                <label for="aantal-leden">Aantal projectleden</label>
                <input type="number" class="form-control" id="aantal-leden" name="aantal_leden">
            </div>
            <div class="form-group">
                <label for="telefoon-opdrachtgever">Telefoonnummer opdrachtgever</label>
                <input type="number" class="form-control " id="telefoon-opdrachtgever" name="telefoon_opdrachtgever">
            </div>
            <div class="form-group">
                <label for="telefoon-opdrachtgever">* Verplicht in te vullen velden</label>
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
