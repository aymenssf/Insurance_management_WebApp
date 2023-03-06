<?php
    try{
    $conn= new PDO('mysql:host=localhost;dbname=gestion_assurance','root','');
    }
    catch(PDOExeption $e){
        echo $e->getMessage();
    }
?>
