<?php
    include("config/db_connect.php");
    //date function
    $date = date("Y-m-d");

    //array for errors
    $errors = array("description" => "", "place" => "", "time" =>"");

    //initialise array fields to empty
    $description = $time = $place = "";

    if($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location:index.php');
    }
    
    //validation checks for description input
    if(!isset($_POST['description']) || (isset($_POST['description']) && empty($_POST['description'])) ) {
        $errors['description'] = "Description is required";
    }else{
        $description = $_POST['description'];
    }

    //validation checks for place input
    if(!isset($_POST['place']) || (isset($_POST['place']) && empty($_POST['place'])) ) {
        $errors['place'] = "Place is required";
    }else{
        $place = $_POST['place'];
    }

    //validation checks for time input
    if(!isset($_POST['time']) || (isset($_POST['time']) && empty($_POST['time'])) ) {
        $errors['time'] = "time is required";
    }else if(strtotime($date) > strtotime($_POST['time'])){
        $errors['time'] = "Invalid date selected";
    }else{
        $time = $_POST['time'];
    }

        
?>