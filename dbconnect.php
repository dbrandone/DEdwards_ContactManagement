<?php
$connect = new mysqli('localhost', 'root', '', 'contactmanagement');

        if(!$connect){
            die(mysqli_error($connect));
        }
    
?>