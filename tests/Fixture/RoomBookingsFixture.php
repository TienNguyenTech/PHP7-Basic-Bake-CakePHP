<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomBookingsFixture
 */
class RoomBookingsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 'f4d6bcea-a61c-407a-99d4-b85bd3d8e9a1',
                'room_id' => '29b17356-71fb-4ab4-84eb-a9034c01145a',
                'start_datetime' => '2023-10-03 07:55:43',
                'end_datetime' => '2023-10-03 07:55:43',
                'email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
