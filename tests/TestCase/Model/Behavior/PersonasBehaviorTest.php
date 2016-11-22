<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\PersonasBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\PersonasBehavior Test Case
 */
class PersonasBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\PersonasBehavior
     */
    public $Personas;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Personas = new PersonasBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Personas);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
