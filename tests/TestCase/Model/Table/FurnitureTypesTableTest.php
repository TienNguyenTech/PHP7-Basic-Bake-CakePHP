<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FurnitureTypesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FurnitureTypesTable Test Case
 */
class FurnitureTypesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FurnitureTypesTable
     */
    protected $FurnitureTypes;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.FurnitureTypes',
        'app.Rooms',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('FurnitureTypes') ? [] : ['className' => FurnitureTypesTable::class];
        $this->FurnitureTypes = $this->getTableLocator()->get('FurnitureTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->FurnitureTypes);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FurnitureTypesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
