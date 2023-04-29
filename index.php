<?php
echo "<h1>Web Exploit Scan 2023</h1>";
$ip = " ip : ".$_SERVER['REMOTE_ADDR'];
$user = "\n System and browser : ".$_SERVER['HTTP_USER_AGENT'];
$coun = "\n Country : ".$_SERVER['HTTP_ACCEPT_LANGUAGE'];

$filoo = fopen('security.txt','a');
fwrite($filoo, "\nuser:\n");
fwrite($filoo, $ip);
fwrite($filoo, $user);
fwrite($filoo, $coun);
fwrite($filoo, "\n---------------------------");
fclose($filoo);
?>