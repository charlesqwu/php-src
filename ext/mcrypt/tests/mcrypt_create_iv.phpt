--TEST--
mcrypt_create_iv
--SKIPIF--
<?php if (!extension_loaded("mcrypt")) print "skip"; ?>
--FILE--
<?php
$iv1 = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB), MCRYPT_RAND);
$iv2 = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB), MCRYPT_DEV_URANDOM);
$iv3 = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB), MCRYPT_DEV_RANDOM);

echo strlen($iv1) . "\n";
echo strlen($iv2) . "\n";
echo strlen($iv3) . "\n";
--EXPECTF--
Deprecated: Function mcrypt_get_iv_size() is deprecated in %s%emcrypt_create_iv.php on line 2

Deprecated: Function mcrypt_create_iv() is deprecated in %s%emcrypt_create_iv.php on line 2

Deprecated: Function mcrypt_get_iv_size() is deprecated in %s%emcrypt_create_iv.php on line 3

Deprecated: Function mcrypt_create_iv() is deprecated in %s%emcrypt_create_iv.php on line 3

Deprecated: Function mcrypt_get_iv_size() is deprecated in %s%emcrypt_create_iv.php on line 4

Deprecated: Function mcrypt_create_iv() is deprecated in %s%emcrypt_create_iv.php on line 4
16
16
16
