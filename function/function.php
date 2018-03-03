<?php
    if(isset($_POST["chkBox"])==0){
        header('location: disclaimer.php');
    }else{
        header('location: index.php');
    }