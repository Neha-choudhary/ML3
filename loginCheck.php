<?php
//By scriptgates.com
//PHP. This section mannage the summited login information
//Sleep(2) is optional. 
//Delays the program execution for the given number of seconds.
sleep(2);
$UserName 	  = $_POST["txtUser"];
$Password 	  = $_POST["HiddenPass"];
$chkRemember  = $_POST["txtRememberMe"];
$CurrentColor = $_POST["txtCurrentColor"];
$CurrentBack  = $_POST["txtCurrentBack"];
$Valid = 0;
$UserName = strtolower($UserName);
$Password = strtolower($Password);
// Perform your custome user validation
if ($UserName == "scriptgates" && $Password == "scriptgates") 
{
	$Valid = 1;
}
echo $Valid;
?>
