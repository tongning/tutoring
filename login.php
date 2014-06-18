<?php
session_start();
include_once('/var/www/bill/inc/calendar/inc/auth.php');
include_once 'db.inc.php';
$db=new PDO(DB_INFO,DB_USER,DB_PASS);
$id=htmlentities(strval($_POST['stuid']));
$pass=htmlentities($_POST['password']);

$billuname="";
$firstname="";
$sql="SELECT * FROM users WHERE id=? LIMIT 1";
$stmt=$db->prepare($sql);
$stmt->execute(array($id.""));
while($row = $stmt->fetch()){
	$billusername=$row['uname'];
	$firstname=$row['fname'];
}
if(!pam_auth2($billusername,$pass)){
	header('Location: index.php?error=1');
}
else{
	$_SESSION['logged_in']=1;
	$_SESSION['fname']=htmlentities($firstname);
	header('Location: subjects.php');
}
?>