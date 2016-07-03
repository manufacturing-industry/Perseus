<?php

use Perseus\Perseus;

class PerseusTest extends PHPUnit_Framework_TestCase {

    public function testClassRun()
    {
        $perseus = new Perseus;
        $this->assertTrue($perseus->classRun());
    }

}