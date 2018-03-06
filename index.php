<?php
    if(!isset($_COOKIE["disclaimer"])){
        header('location: disclaimer.php');
    }
    
    include 'function/function.php';
    include 'function/class.php';
    include 'include/header.php';
    
?>




    <h3>Förnamn</h3>
    <input name = "forename" type = "text"/>
    <h3>Efternamn</h3>
    <input name = "lastname" type = "text"/>
    <h3>Person Nr</h3>
    <input name = "socialnumber" type = "number" placeholder = "YYYYMMDD"/></br></br>
    <button type = "submit" onClick = "postSetH()">Skicka</button>



    <div id = "writeHere"></div>










<?php
    include 'include/footer.php';

?>