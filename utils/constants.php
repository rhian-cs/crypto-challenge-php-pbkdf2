<?php
  define("VERBOSE_OUTPUT", false);
  define("OUTPUT_FILENAME", "encrypted_secret.txt");
  define("KEY_SIZE", 256);
  define("IV_SIZE", 128);
  define("SALT_SIZE", 128);
  define("PBKDF2_HASH_ALGORITHM", "sha256");
  define("PBKDF2_ITERATIONS", 50000);
?>
