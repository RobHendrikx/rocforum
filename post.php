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

      /* upload afbeelding */

      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if($check !== false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = 1;
          } else {
              echo "File is not an image.";
              $uploadOk = 0;
          }
      }
      // Check if file already exists
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 500000) {
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
          echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
      } else {
          if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
              //SUCCESS

              // var_dump($target_file);
              // echo "<pre>"; var_dump($_FILES); echo "</pre>";
              // die();



          } else {
              echo "Sorry, there was an error uploading your file.";
          }
      }



      /* end upload afbeelding */


        $projectnaam = test_input($_POST["projectnaam"]);
        $omschrijving = test_input($_POST["omschrijving"]);
        $aantal_leden = test_input($_POST["aantal_leden"]);
        $opleverdatum = test_input($_POST["opleverdatum"]);
        $email_opdrachtgever = test_input($_POST["email_opdrachtgever"]);
        $telefoon_opdrachtgever = test_input($_POST["telefoon_opdrachtgever"]);
        $catid = test_input($_POST["cat_id"]);
        /*$categorie = test_input($_POST["categorie"]);*/

        /*echo '<pre>';
        var_dump($catid);
        echo '<pre>';
        die();*/

        try {
            $sql = "INSERT INTO post (projectnaam, omschrijving, aantal_leden, opleverdatum, email_opdrachtgever, telefoon_opdrachtgever, catid, userid, afbeeldingen)
                        VALUES (:pnaam, :omschrijving, :aantal_leden, :opleverdatum, :email_opdrachtgever, :telefoon_opdrachtgever, :catid, :userid, :afbeeldingen)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':pnaam', $projectnaam);
            $stmt->bindParam(':omschrijving', $omschrijving);
            $stmt->bindParam(':aantal_leden', $aantal_leden);
            $stmt->bindParam(':opleverdatum', $opleverdatum);
            $stmt->bindParam(':email_opdrachtgever', $email_opdrachtgever);
            $stmt->bindParam(':telefoon_opdrachtgever', $telefoon_opdrachtgever);
            $stmt->bindParam(':afbeeldingen', $target_file);
            /*$stmt->bindParam(':categorie', $categorie);*/
            $stmt->bindParam(':catid', $catid);
            $stmt->bindParam(':userid', $_SESSION['user']['username']);

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
<form class="container" method="post" action="" enctype="multipart/form-data">
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
                    <!-- <a href="#" type="button" class="btn btn-primary btn-lg btn-block">Upload afbeelding</a> -->
                    <input class="btn btn-primary" type="file" name="fileToUpload" value="upload afbeelding" id="fileToUpload">
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
