<?php 
include_once("db.php");

$username = stripslashes($_POST["username"]);
$password = stripslashes(md5($_POST["password"]));

$sql1 = $db->prepare("Select * from gym_users where user_name = :username AND user_password = :password");
$sql1->bindValue(":username", $username);
$sql1->bindValue(":password", $password);
$sql1->execute();
$row = $sql1->fetch(PDO::FETCH_ASSOC);

if($row){
  session_start();
  $_SESSION['uID'] = $row['idgym_users'];
  $_SESSION['uName'] = $row['user_name'];
  echo "true";
}
else{
  echo "false";
}

?>