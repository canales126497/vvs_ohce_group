<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function echo(string $word): string
    {
        return strrev($word);
    }
}
