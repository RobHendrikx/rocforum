<?php

if(isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];


    $db = new PDO('mysql:host=localhost;dbname=projectforum;', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("SELECT * FROM users WHERE users.username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $hash = $result["password"];

    if (password_verify($password, $hash)) {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["user"] = $result;
        header('Location: index.php');
    } else {
        header('Location: login.html');
    }


    /*if(count($result) > 0){


      session_start();
      $_SESSION["username"] = $username;
      $_SESSION["user"] = $result;
      header('Location: index.php');
    }else{
        header('Location: login.html');
    }

    echo"<pre>";
    var_dump($result);
    echo"</pre>";*/



}
