<?php

declare(strict_types=1);

namespace Cast\Crypto\Blake;

function blake256($string)
{
    return State256::hash($string);
}
