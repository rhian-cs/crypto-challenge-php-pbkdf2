<?php
  include("utils/includes.php");

  echo "Type a secret you wish to store. It will be encrypted and stored in a file.\n";
  $secret_data = readline("> ");

  echo "Create a password to protect this file.\n";
  $password = readline("> ");

  $key_data = generate_key_from_password($password);
  $encrypted_data = encrypt($secret_data, $key_data);

  if(VERBOSE_OUTPUT) {
    echo "key: ".bin2hex($key_data->key)."\n";
    echo "iv: ".bin2hex($key_data->iv)."\n";
    echo "salt: ".bin2hex($key_data->salt)."\n";
    echo "encrypted_data: ".bin2hex($encrypted_data)."\n";
  }

  $file_contents = $key_data->iv . $key_data->salt . $encrypted_data;
  file_put_contents(OUTPUT_FILENAME, bin2hex($file_contents));

  echo "Your secret has been encrypted and stored in the '".OUTPUT_FILENAME."' file.\n";
?>
