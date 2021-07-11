# Crypto Challenge! Encryption and Decryption with PBKDF2 and AES
I was challenged to make a functioning PHP program to encrypt text with a password, as part of my criptography study group.

Some may think dealing with cryptography is hard, but in reality, dealing with PHP is way harder.

## Usage

### The basic process
The `encrypt_thing.php` script will prompt you for a secret you wish to save, e.g. your credit card details (they sure will be safe), and then it will prompt you for a password to store it. Finally, it will create a readable file called `encrypted_secret.txt`.

The `decrypt_thing.php` will decrypt the `encrypted_secret.txt`. To do so, it will prompt you for your password and display the original secret to you.

### Running with docker - more portable ~~and doesn't taint your machine with PHP~~
Run script with `./docker-run <script_name.php>`, it will do everything automatically.

e.g. run the encryption script with `./docker-run encrypt_thing.php`.

### Running locally
If you're brave enough to have PHP installed locally, just run the desired script, e.g. `php encrypt_thing.php`.
