<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneralsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneralsTable Test Case
 */
class GeneralsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneralsTable
     */
    public $Generals;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.generals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Generals') ? [] : ['className' => GeneralsTable::class];
        $this->Generals = TableRegistry::get('Generals', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Generals);

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
