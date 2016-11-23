<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassRoomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassRoomsTable Test Case
 */
class ClassRoomsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassRoomsTable
     */
    public $ClassRooms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.class_rooms',
        'app.recintos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClassRooms') ? [] : ['className' => 'App\Model\Table\ClassRoomsTable'];
        $this->ClassRooms = TableRegistry::get('ClassRooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClassRooms);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
