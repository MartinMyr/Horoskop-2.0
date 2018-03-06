<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $array = array("name" => $_POST["forename"],
        "lastname" => $_POST["lastname"],
        "socialnumber" => $_POST["socialnumber"]);
        $_SESSION["horoskopify"] = "$array";   
    }


?>