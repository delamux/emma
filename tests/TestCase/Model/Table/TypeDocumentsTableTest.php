<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypeDocumentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypeDocumentsTable Test Case
 */
class TypeDocumentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TypeDocumentsTable
     */
    public $TypeDocuments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.type_documents',
        'app.personas',
        'app.addresses',
        'app.teachers'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TypeDocuments') ? [] : ['className' => 'App\Model\Table\TypeDocumentsTable'];
        $this->TypeDocuments = TableRegistry::get('TypeDocuments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TypeDocuments);

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
}
