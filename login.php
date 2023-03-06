<?php 

require "db_conn.php";

if(isset($_POST['login'])){
    $requete="SELECT * from user where user_name=:user_name and password = :password";
    $reponse= $conn->prepare($requete); 
    $reponse->execute(
    array(
       'user_name'=>$_POST['user_name'],
       'password'=>$_POST['password']
       ));
    $count=$reponse->rowCount();
   if( $count > 0){
	  Session_start();
      $_SESSION["user_name"]=$_POST["user_name"];
      header("location:index11.php");
   }
else{
	header("Location: pglogin.php?error=Incorect User name or password");
	exit();
  
    } 

}

?>