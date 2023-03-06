<?php require "session.php";?>
<?php
require "db_conn.php";
$ncheq=$_GET['ncheq'];
$reponse = $conn->query("UPDATE `cheques` SET `etat`='valide'
 WHERE  `cheques`.`ncheq` = '".$ncheq."';"); 
 header("location: chequelstall.php");

?>