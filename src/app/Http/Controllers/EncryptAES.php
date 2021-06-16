<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EncryptAES extends Controller
{
	//función de doble-paso para cifrar con el método AES-256-CBC
    public static function cryptMe ($string) {
        $crypted = Crypt::encrypt(Crypt::encrypt($string));
        return $crypted;
    }

	//función de doble-paso para descifrar con el método AES-256-CBC
    public static function decryptMe ($string) {
        $decrypted = Crypt::decrypt(Crypt::decrypt($string));
        return $decrypted;
    }
}
