<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomBooking $roomBooking
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Room Booking'), ['action' => 'edit', $roomBooking->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Room Booking'), ['action' => 'delete', $roomBooking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomBooking->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Room Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Room Booking'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="roomBookings view content">
            <h3><?= h($roomBooking->email) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($roomBooking->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Room') ?></th>
                    <td><?= $roomBooking->hasValue('room') ? $this->Html->link($roomBooking->room->name, ['controller' => 'Rooms', 'action' => 'view', $roomBooking->room->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($roomBooking->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Start Datetime') ?></th>
                    <td><?= h($roomBooking->start_datetime) ?></td>
                </tr>
                <tr>
                    <th><?= __('End Datetime') ?></th>
                    <td><?= h($roomBooking->end_datetime) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
