<?php

function generate_key_from_password($password, $iv = null, $salt = null) {
  if(!$iv) {
    $iv   = openssl_random_pseudo_bytes(IV_SIZE/8);
  }

  if(!$salt) {
    $salt = openssl_random_pseudo_bytes(SALT_SIZE/8);
  }

  $key_data = new KeyData();

  $key = hash_pbkdf2(
    PBKDF2_HASH_ALGORITHM,
    $password,
    $salt,
    PBKDF2_ITERATIONS,
    KEY_SIZE,
    true # => binary output
  );

  $key_data->key = $key;
  $key_data->salt = $salt;
  $key_data->iv = $iv;

  return $key_data;
}
?>
