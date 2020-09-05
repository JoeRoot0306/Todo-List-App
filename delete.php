<?php
    include("config/db_connect.php");
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $delete = $conn->prepare("DELETE FROM todo WHERE id=$id");
        $delete->execute();
        header("Location:index.php");
    }
?>