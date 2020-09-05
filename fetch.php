<?php
    include("config/db_connect.php");
    $stmt = $conn->prepare("SELECT description, place, time, id FROM todo");
    $stmt->execute();

    //fetch data
    $data = $stmt->fetchall(PDO::FETCH_ASSOC);
  

?>