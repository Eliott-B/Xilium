<?php

namespace app\xiliumtest;

use app\Hash;
use PHPUnit\Framework\TestCase;

final class HashTest extends TestCase
{
    public function testCrypt()
    {
        Hash::setKey('Secret');
        $donneeAcrypter = 'Attack at dawn45';
        $resultatCrypte = Hash::rc4($donneeAcrypter);
        $resultatAttendu = '45a01f645fc35b383552544b9bf58da7';
        $this->assertEquals($resultatAttendu, $resultatCrypte);
    }

    public function testDecrypt()
    {
        Hash::setKey('Secret');
        $donneeCryptee = '45a01f645fc35b383552544b9bf58da7';
        $donneeCryptee = hex2bin($donneeCryptee);
        $resultatAttendu = 'Attack at dawn45';
        $donneeDecryptee = Hash::rc4($donneeCryptee);
        $this->assertEquals($resultatAttendu, hex2bin($donneeDecryptee));
    }
}