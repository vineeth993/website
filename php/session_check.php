<?php
	session_start();
	echo $_SESSION['login_user'];
	session_destroy();
	if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>