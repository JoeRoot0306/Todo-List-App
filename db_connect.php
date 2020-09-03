<?php
  //connect to database
  $hostname = "localhost";
  $username = "joe";
  $password = "test1234";

  try {
    $conn = new PDO("mysql:host=$hostname;dbname=todos",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>
