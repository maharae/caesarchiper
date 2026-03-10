<?php

namespace App\Models;

class CaesarCipher
{
    public static function encrypt($text, $shift)
    {
        $result = "";
        $shift = $shift % 26;

        foreach (str_split($text) as $char) {
            if (ctype_alpha($char)) {
                $ascii = ctype_upper($char) ? 65 : 97;
                $result .= chr((ord($char) - $ascii + $shift) % 26 + $ascii);
            } else {
                $result .= $char;
            }
        }
        return $result;
    }

    public static function decrypt($text, $shift)
    {
        return self::encrypt($text, 26 - ($shift % 26));
    }
}
