<?php

use PHPUnit_Framework_TestCase;
use EvilDead\Generator;

/**
 * WIP  
 */
class GeneratorTest extends PHPUnit_Framework_TestCase
{
    public function testEvilFillerParagraph()
    {
        $generator = new Generator();
        
        $output = $generator->makeParagraph('evil-filler');
        
        $this->assert
    }
    
    public function testParagraph()
    {
        $generator = new Generator();
        
        $output = $generator->makeParagraph('po-ta-toes');
    }
}
