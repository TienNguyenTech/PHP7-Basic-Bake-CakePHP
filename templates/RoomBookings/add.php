<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoomBooking $roomBooking
 * @var \Cake\Collection\CollectionInterface|string[] $rooms
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Room Bookings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="roomBookings form content">
            <?= $this->Form->create($roomBooking) ?>
            <fieldset>
                <legend><?= __('Add Room Booking') ?></legend>
                <?php
                    echo $this->Form->control('room_id', ['options' => $rooms]);
                    echo $this->Form->control('start_datetime');
                    echo $this->Form->control('end_datetime');
                    echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
