<?php
header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

$email	= trim(htmlspecialchars($_REQUEST["email"]));
$name	= trim(htmlspecialchars($_REQUEST["name"]));

$pfileName	= "add.php";
$MyFile 	= fopen($pfileName, "a");
$nline="\"".$email."\""	."," ."\"".$name."\"" ."\r\n";
fwrite($MyFile, $nline);
fclose($MyFile);
die;

?>
	 
