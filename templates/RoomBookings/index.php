<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\RoomBooking> $roomBookings
 */
?>
<div class="roomBookings index content">
    <?= $this->Html->link(__('New Room Booking'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Room Bookings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('room_id') ?></th>
                    <th><?= $this->Paginator->sort('start_datetime') ?></th>
                    <th><?= $this->Paginator->sort('end_datetime') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($roomBookings as $roomBooking): ?>
                <tr>
                    <td><?= h($roomBooking->id) ?></td>
                    <td><?= $roomBooking->hasValue('room') ? $this->Html->link($roomBooking->room->name, ['controller' => 'Rooms', 'action' => 'view', $roomBooking->room->id]) : '' ?></td>
                    <td><?= h($roomBooking->start_datetime) ?></td>
                    <td><?= h($roomBooking->end_datetime) ?></td>
                    <td><?= h($roomBooking->email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $roomBooking->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roomBooking->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roomBooking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roomBooking->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
