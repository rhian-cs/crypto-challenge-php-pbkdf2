<?php
  function encrypt($secret_data, $key_data) {
    return openssl_encrypt(
      $secret_data,
      "AES-256-CBC",
      $key_data->key,
      0, # => options
      $key_data->iv
    );
  }

  function decrypt($encripted_data, $key_data) {
    return openssl_decrypt(
      $encripted_data,
      "AES-256-CBC",
      $key_data->key,
      0, # => options
      $key_data->iv
    );
  }
?>
