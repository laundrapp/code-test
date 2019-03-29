<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class CodeKataTest extends TestCase
{
	public function setUp()
    {
        require_once 'src/kata.php';
    }

    private function checkFunction(string $function)
    {
        if (!function_exists($function)) {
            $this->markTestSkipped(sprintf('This test requires function: %s', $function));
        }
    }

    public function test_string_average()
    {
        $this->checkFunction('string_average');
        $this->assertEquals('four', string_average(['zero','nine','five','two']));
        $this->assertEquals('three', string_average(['three', 'three', 'three']));
        $this->assertEquals('six', string_average(['nine', 'seven', 'two']));
        $this->assertNotEquals('seven', string_average(['six', 'six']));
    }

    public function test_dna_sequencer()
    {
        $this->checkFunction('dna_sequencer');
        $this->assertEquals('TAACG', dna_sequencer('ATTGC'));
        $this->assertEquals('CATA', dna_sequencer('GTAT'));
        $this->assertNotEquals('CATA', dna_sequencer('CATA'));
    }

    public function test_pyramid()
    {
        $this->checkFunction('pyramid');
        $this->assertEquals(
            "  *  \n" .
            " *** \n" .
            "*****", pyramid(3));

        $this->assertEquals("*", pyramid(1));

        $this->assertEquals(
            " * \n" .
            "***", pyramid(2));
    }

    public function test_stray_number()
    {
        $this->checkFunction('stray_number');
        $this->assertEquals(3, stray_number([1,1,1,3]));
        $this->assertEquals(3, stray_number([2,3,2]));
        $this->assertEquals(1, stray_number([9,9,1]));
        $this->assertNotEquals(1, stray_number([1,1,9]));
    }

    public function test_braces()
    {
        $this->checkFunction('syntax_validator');
        $this->assertFalse(syntax_validator('('));
        $this->assertTrue(syntax_validator('()'));
        $this->assertTrue(syntax_validator('({})'));
        $this->assertFalse(syntax_validator('({)}'));
        $this->assertTrue(syntax_validator('([{}])'));
        $this->assertTrue(syntax_validator('([]{})()'));
        $this->assertFalse(syntax_validator('()[[]{}'));
    }

    public function test_truth()
    {
        if (preg_replace('/\s+/', ' ', file_get_contents('src/truth.php')) === '<?php return;') {
            $this->markTestSkipped('You must return the truth!');
        }

        $this->assertTrue(truth(require "src/truth.php"));
    }
}
