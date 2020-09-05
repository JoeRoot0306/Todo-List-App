<?php
    include("config/db_connect.php");
    
    //date function
    $date = date("Y-m-d");

    $description = $time = $place = "";

    $errors = [];

    if(($_SERVER['REQUEST_METHOD']) !== 'POST') {
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

    //array for data
    $data = [
        "description" => $description,
        "place" => $place,
        "time" => $time
    ];
    
    //checks for errors than outputs them, if none will insert data into db
    if(count($errors)>0){
        var_dump($errors);
    } else {
        $sql = "INSERT INTO todo (description,place,time) VALUES (:description, :place, :time)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);
    }

?>
