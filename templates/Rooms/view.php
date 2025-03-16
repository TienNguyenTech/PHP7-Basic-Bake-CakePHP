<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Room'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rooms view content">
            <h3><?= h($room->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($room->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($room->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Building') ?></th>
                    <td><?= h($room->building) ?></td>
                </tr>
                <tr>
                    <th><?= __('Capacity') ?></th>
                    <td><?= $this->Number->format($room->capacity) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Furniture Types') ?></h4>
                <?php if (!empty($room->furniture_types)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Cost') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($room->furniture_types as $furnitureTypes) : ?>
                        <tr>
                            <td><?= h($furnitureTypes->id) ?></td>
                            <td><?= h($furnitureTypes->name) ?></td>
                            <td><?= h($furnitureTypes->cost) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'FurnitureTypes', 'action' => 'view', $furnitureTypes->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'FurnitureTypes', 'action' => 'edit', $furnitureTypes->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'FurnitureTypes', 'action' => 'delete', $furnitureTypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $furnitureTypes->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Room Bookings') ?></h4>
                <?php if (!empty($room->room_bookings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Room Id') ?></th>
                            <th><?= __('Start Datetime') ?></th>
                            <th><?= __('End Datetime') ?></th>
                            <th><?= __('Email') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($room->room_bookings as $roomBookings) : ?>
                        <tr>
                            <td><?= h($roomBookings->id) ?></td>
                            <td><?= h($roomBookings->room_id) ?></td>
                            <td><?= h($roomBookings->start_datetime) ?></td>
                            <td><?= h($roomBookings->end_datetime) ?></td>
                            <td><?= h($roomBookings->email) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'RoomBookings', 'action' => 'view', $roomBookings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'RoomBookings', 'action' => 'edit', $roomBookings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'RoomBookings', 'action' => 'delete', $roomBookings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomBookings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
