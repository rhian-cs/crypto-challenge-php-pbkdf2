# Crypto Challenge! Encryption and Decryption with PBKDF2 and AES
I was challenged to make a functioning PHP program to encrypt text with a password, as part of my criptography study group.

Some may think dealing with cryptography is hard, but in reality, dealing with PHP is way harder.

### How it works
Avoid spoilers by trying it out by yourself! Instructions are [below](#usage).

The `encrypt_thing.php` script will prompt you for a secret you wish to save, e.g. your credit card details (they sure will be safe), and then it will prompt you for a password to store it. Finally, it will create a readable file called `encrypted_secret.txt`.

```console
$ php encrypt_thing.php

Type a secret you wish to store. It will be encrypted and stored in a file.
> Hello, world!
Create a password to protect this file.
> 123456
Your secret has been encrypted and stored in the 'encrypted_secret.txt' file.

```

Now if we take a look at the `encrypted_secret.txt` file, it will contain some encrypted stuff.

```console
$ cat encrypted_secret.txt

4fc435f68fd016b58cb514a1fb55190e54a21d35d449440fb0ba8dbf1e24772159642b3168655a44495a353541626870432f4f5542413d3d
```

The `decrypt_thing.php` will decrypt the `encrypted_secret.txt`. To do so, it will prompt you for your password and display the original secret to you.

```console
$ php decrypt_thing.php

Type in the password you've used to encrypt the 'encrypted_secret.txt' file.
> 123456
Your original secret was:
Hello, world!
```

## Usage

### Running with docker - more portable ~~and doesn't taint your machine with PHP~~
Run script with `./docker-run <script_name.php>`, it will do everything automatically.

e.g. run the encryption script with `./docker-run encrypt_thing.php`.

### Running locally
If you're brave enough to have PHP installed locally, just run the desired script, e.g. `php encrypt_thing.php`.
