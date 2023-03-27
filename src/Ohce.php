<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function echo(string $word): string
    {
        if($word === strrev($word)){
            return $word . " ¡Bonita palabra!";
        }
        return strrev($word);
    }
}
