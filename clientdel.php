<?php require "session.php";?>
<?php
require "db_conn.php";
$ndoss=$_GET['ndoss'];
       
        $result=$conn->query(" DELETE FROM `gestion_assurance`.`client` WHERE `client`.`ndoss` = '".$ndoss."';");
        header("location: clientlst.php");

?>