<?php
include('create_key_from_password.php');
include('aes_functions.php');

echo "Digite a senha que usou para proteger o seu segredo.\n";
$password = readline("> ");

$key_iv_pair = create_key_from_password($password);
$encrypted_data = encrypt($secret_data, $key_iv_pair);
$file = "encrypted_secret.txt";

file_put_contents($file, bin2hex($encrypted_data));

echo "Seus segredos foram guardados no arquivo '$file'.\n";

?>