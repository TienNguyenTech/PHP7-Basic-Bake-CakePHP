<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoomsFixture
 */
class RoomsFixture extends TestFixture
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
                'id' => '963d2143-ebb7-4557-9bb2-b7c1ffba4802',
                'name' => 'Lorem ipsum dolor sit amet',
                'building' => 'Lorem ipsum dolor sit amet',
                'capacity' => 1,
            ],
        ];
        parent::init();
    }
}
