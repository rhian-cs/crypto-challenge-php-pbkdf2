<?php

$password = "password";
$secret_data = "secret_data";

$key_iv_pair = create_key_from_password($password);
$key = $key_iv_pair[0];
$iv = $key_iv_pair[1];

echo "\n";
echo "key: ".bin2hex($key)."\n";
echo "iv:  ".bin2hex($iv)."\n";
echo "encripted_data: ".bin2hex($encripted_data)."\n";
echo "decrypted_data: ".$decrypted_data."\n";
?>
