<?php
/**
 * Perseus Command Line Task Runner
 *
 * @package Perseus
 * @author Ryan Rentfro
 * @license MIT
 * @url https://github.com/manufacturing-industry
 */

use Perseus\Perseus;

/**
 * Class PerseusTest
 *
 * Used to test the Perseus class
 */
class PerseusTest extends PHPUnit_Framework_TestCase
{
    /**
     * Tests that the class can be instantiated
     */
    public function testInstantiate()
    {
        $perseus = new Perseus;
        $this->assertTrue(is_a($perseus, '\Perseus\Perseus'));
    }
}