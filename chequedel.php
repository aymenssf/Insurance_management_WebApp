<?php require "session.php";?>
<?php
require "db_conn.php";
$ncheq=$_GET['ncheq'];
        $result=$conn->query(" DELETE FROM `gestion_assurance`.`cheques` WHERE `cheques`.`ncheq` = '".$ncheq."';");
        header("location: chequelstall.php");

?>