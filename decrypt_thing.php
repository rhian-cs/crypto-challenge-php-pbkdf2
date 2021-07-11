<?php
  include("utils/includes.php");

  $file_contents = hex2bin(file_get_contents(OUTPUT_FILENAME));

  $iv = substr($file_contents, 0, IV_SIZE/8);
  $salt = substr($file_contents, IV_SIZE/8, SALT_SIZE/8);
  $encrypted_data = substr($file_contents, (IV_SIZE + SALT_SIZE)/8);

  echo "Digite a senha que usou para proteger o seu segredo.\n";
  $password = readline("> ");

  $key_data = generate_key_from_password($password, $iv, $salt);

  if(VERBOSE_OUTPUT) {
    echo "key: ".bin2hex($key_data->key)."\n";
    echo "iv: ".bin2hex($key_data->iv)."\n";
    echo "salt: ".bin2hex($key_data->salt)."\n";
    echo "encrypted_data: ".bin2hex($encrypted_data)."\n";
  }

  $secret_data = decrypt($encrypted_data, $key_data);

  echo "Seu segredo original era:\n";
  echo $secret_data."\n";
?>
