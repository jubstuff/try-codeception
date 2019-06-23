<?php
/**
 * This file is part of the Jubstuff.TryCodeception
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Jubstuff\TryCodeception;

use PHPUnit\Framework\TestCase;

class TryCodeceptionTest extends TestCase
{
    /**
     * @var TryCodeception
     */
    protected $tryCodeception;

    protected function setUp()
    {
        $this->tryCodeception = new TryCodeception;
    }

    public function testIsInstanceOfTryCodeception()
    {
        $actual = $this->tryCodeception;
        $this->assertInstanceOf(TryCodeception::class, $actual);
    }
}
