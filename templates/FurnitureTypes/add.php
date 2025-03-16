<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FurnitureType $furnitureType
 * @var \Cake\Collection\CollectionInterface|string[] $rooms
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Furniture Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="furnitureTypes form content">
            <?= $this->Form->create($furnitureType) ?>
            <fieldset>
                <legend><?= __('Add Furniture Type') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('cost');
                    echo $this->Form->control('rooms._ids', ['options' => $rooms]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
