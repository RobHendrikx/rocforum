<?php
session_start();
// var_dump($_SESSION);
require ('../mydatabase.php');
$postid = $_GET["id"];
if (isset($_POST["reageer"])) {
  $reactiex = $_POST["reageer"];

  $username = $_SESSION["username"];

  $sql = "SELECT * FROM rocforum.users WHERE username = :username";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":username", $username, PDO::PARAM_STR);
  $stmt->execute();
  $user = $stmt->fetch();
  $userid = $user["idusers"];

  // echo "<pre>"; var_dump($user); echo "</pre>";


  $sql = "INSERT INTO reacties (reactie, postid, userid) VALUES (:reactie, :postid, :userid)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":reactie", $reactiex, PDO::PARAM_STR);
  $stmt->bindParam(":postid", $postid, PDO::PARAM_INT);
  $stmt->bindParam(":userid", $userid, PDO::PARAM_INT);
  $stmt->execute();
}

try{

  $sql = "SELECT * FROM rocforum.post WHERE idpost=".$postid;
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $post = $stmt->fetch();

  $sql = "SELECT * FROM rocforum.reacties, rocforum.users, rocforum.post WHERE userid = idusers AND postid = idpost ORDER BY idreacties DESC";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $reacties = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
  echo $e->getMessage();
}


?>
<!DOCTYPE html>
<html>
  <head>
      <title>
          <?php echo $post["projectnaam"]; ?>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1 class="center"><?php echo $post["projectnaam"] ?></h1>
        <h3 class="center"><?php echo $post["categorie"] ?></h3>
        <p class="center"><a href="ict.php">Go Back</a></p>
      </div>
    </div>

    <div class="row margin-top-20">
      <div class="col-md-12">
        <div class="well reldate" style='padding: 40px;'>
          <?php echo $post["omschrijving"]; ?>
          <p class="lowerdate"><?php echo $post["datum"] ?></p>
        </div>
      </div>
    </div>

    <div class="row margin-top-20">
      <div class="col-md-12">
        <form class="form-group" action="post.php?id=<?php echo $postid;  ?>" method="post">
          <h4>Reageer als: <?php echo $_SESSION["username"] ?></h4>
          <textarea name="reageer" class="form-control" rows="3" cols="80"></textarea>
          <input type="submit" name="" class="btn btn-primary" style="margin-top: 5px;" value="Reageer">
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <?php
          foreach ($reacties as $key => $reactie) {
            echo "<div class='well'>
                    <p>{$reactie["username"]} :</p>
                    <lead>
                      {$reactie["reactie"]}
                    </lead>
                  </div>";
          }

        ?>
      </div>
    </div>
  </div>





  </body>
</html>
