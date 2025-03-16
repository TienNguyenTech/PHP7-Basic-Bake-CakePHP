<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property string $id
 * @property string $name
 * @property string $building
 * @property int $capacity
 *
 * @property \App\Model\Entity\RoomBooking[] $room_bookings
 * @property \App\Model\Entity\FurnitureType[] $furniture_types
 */
class Room extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'name' => true,
        'building' => true,
        'capacity' => true,
        'room_bookings' => true,
        'furniture_types' => true,
    ];
}
