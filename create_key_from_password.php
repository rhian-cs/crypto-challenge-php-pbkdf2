<?php

function create_key_from_password($password) {
  $salt = "trust me i'm random";
  // $salt = openssl_random_pseudo_bytes(16);

  $hash_algorithm = "sha256";
  $iterations = 1000;
  $key_size = 256; # size (bits)
  $iv_size = 128;  # size (bits)

  # The sum of key and iv sizes (bytes)
  $length = ($key_size + $iv_size)/8;

  $out = hash_pbkdf2(
    $hash_algorithm,
    $password,
    base64_decode($salt),
    $iterations,
    $length,
    true # => binary output
  );

  $key = substr($out, 0, $key_size/8);         # Extract the key from the first part
  $iv = substr($out, $key_size/8, $iv_size/8); # Extract the iv from the second part

  return [$key, $iv];
}
?>