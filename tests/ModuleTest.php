<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Voting;

use MSBios\Voting\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Voting
 */
class ModuleTest extends TestCase
{
    /**
     *
     */
    public function testGetAutoloaderConfig()
    {
        $this->assertInternalType('array', (new Module)->getAutoloaderConfig());
    }
}
