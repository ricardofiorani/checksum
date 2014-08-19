<?php

namespace ZFBrasil\Checksum\Service;

use Exception;

class ChecksumService
{
    public function calculate($input, $multiplier = 9)
    {
        if (strlen($input) > $multiplier) {
            throw new Exception("Multiplier length must be greater than input length");
        }

        for ($i = strlen($input), $j = 0, $tmp = 0; $i > 0; $i--, $j++) {
            $tmp += (substr($input, $j, 1) * $multiplier--);
        }
        $mod = ($tmp % 11);
        if ($mod < 2)
            return 0;
        return 11 - $mod;
    }
}
