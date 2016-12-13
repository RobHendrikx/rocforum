<?php



if(isset($_POST["username"])){
  $username = $_POST["username"];
  $password = $_POST["password"];

  echo"<pre>";
  var_dump($_POST);
  echo"</pre>";



  $db = new PDO('mysql:host=localhost;dbname=rocforum;', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->prepare("SELECT * FROM users WHERE users.username = :username AND users.password = :password ");
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $password);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if(count($result) > 0){
    echo "logged in is true";
  }else{
    echo "logged in is false";
  }

  echo"<pre>";
  var_dump($result);
  echo"</pre>";

  }


?>
