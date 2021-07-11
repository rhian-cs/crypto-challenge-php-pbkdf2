<?php
include("utils/includes.php");

echo "Digite um segredo que deseja armazenar. Ele será armazenado em um arquivo.\n";
$secret_data = readline("> ");

echo "Digite uma senha para proteger o seu segredo.\n";
$password = readline("> ");

$key_data = generate_key_from_password($password);
$encrypted_data = encrypt($secret_data, $key_data);

if(VERBOSE_OUTPUT) {
  echo "key: ".bin2hex($key_data->key)."\n";
  echo "iv: ".bin2hex($key_data->iv)."\n";
  echo "salt: ".bin2hex($key_data->salt)."\n";
  echo "encrypted_data: ".bin2hex($encrypted_data)."\n";
}

$file = "encrypted_secret.txt";

$file_contents = $key_data->iv . $key_data->salt . $encrypted_data;
file_put_contents($file, bin2hex($file_contents));

echo "Seus segredos foram guardados no arquivo '$file'.\n";

?>
