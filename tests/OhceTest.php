<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;
use Mockery;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function echoesReversedWordnotPalindrome(): void
    {
        $ohce = new Ohce();

        $echosWord = $ohce->echo("hola");

        $this->assertEquals("aloh", $echosWord);
    }

    /**
     * @test
     */
    public function returnLikesWordPalindrome(): void
    {
        $ohce = new Ohce();

        $echosWord = $ohce->echo("oto");

        $this->assertEquals("oto ¡Bonita palabra!", $echosWord);
    }
}
