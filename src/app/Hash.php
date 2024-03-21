<?php

namespace app;

/**
 * Module de cryptographie
 */
class Hash
{

    protected static $key = 'Key';

    /**
     * Crypte et décrypte une chaine de caractère
     * @param string $data chaine à crypter/décrypter
     * @return string chaine crypté/décrypté
     */
    public static function rc4($data) {
        $s = array();
        for ($i = 0; $i < 256; $i++) {
            $s[$i] = $i;
        }
        $j = 0;
        $keyLength = strlen(self::$key);
        for ($i = 0; $i < 256; $i++) {
            $j = ($j + $s[$i] + ord(self::$key[$i % $keyLength])) % 256;
            $temp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $temp;
        }
        $i = 0;
        $j = 0;
        $result = '';
        $dataLength = strlen($data);
        for ($k = 0; $k < $dataLength; $k++) {
            $i = ($i + 1) % 256;
            $j = ($j + $s[$i]) % 256;
            $temp = $s[$i];
            $s[$i] = $s[$j];
            $s[$j] = $temp;
            $result .= $data[$k] ^ chr($s[($s[$i] + $s[$j]) % 256]);
        }
        return bin2hex($result);
    }
}