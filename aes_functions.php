<?php
function encrypt($secret_data, $key_iv_pair) {
  return openssl_encrypt(
    $secret_data,
    "AES-256-CBC",
    $key_iv_pair[0],
    0, # => options
    $key_iv_pair[1]
  );
}

function decrypt($secret_data, $key_iv_pair) {
  return openssl_decrypt(
    $encripted_data,
    "AES-256-CBC",
    $key_iv_pair[0], # => key
    0, # => options
    $key_iv_pair[1]  # => iv
  );
}
?>