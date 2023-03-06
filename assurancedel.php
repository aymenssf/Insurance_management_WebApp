
<?php
require "session.php";
require "db_conn.php";

$police=$_GET['police'];
       
        $result=$conn->query("DELETE FROM `assurance` WHERE police = '".$police."';");
        header("location: clientdispassr.php?ndoss=".$_GET['ndoss']."");


?> 