<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FurnitureTypesFixture
 */
class FurnitureTypesFixture extends TestFixture
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
                'id' => 'a79c9853-66c4-4a09-b3da-7728847f49f0',
                'name' => 'Lorem ipsum dolor sit amet',
                'cost' => 1.5,
            ],
        ];
        parent::init();
    }
}
