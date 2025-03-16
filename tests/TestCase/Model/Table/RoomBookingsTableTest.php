<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoomBookingsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoomBookingsTable Test Case
 */
class RoomBookingsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RoomBookingsTable
     */
    protected $RoomBookings;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.RoomBookings',
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
        $config = $this->getTableLocator()->exists('RoomBookings') ? [] : ['className' => RoomBookingsTable::class];
        $this->RoomBookings = $this->getTableLocator()->get('RoomBookings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->RoomBookings);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RoomBookingsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\RoomBookingsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
