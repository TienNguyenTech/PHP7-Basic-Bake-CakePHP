<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FurnitureType $furnitureType
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Furniture Type'), ['action' => 'edit', $furnitureType->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Furniture Type'), ['action' => 'delete', $furnitureType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $furnitureType->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Furniture Types'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Furniture Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="furnitureTypes view content">
            <h3><?= h($furnitureType->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= h($furnitureType->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($furnitureType->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cost') ?></th>
                    <td><?= $this->Number->format($furnitureType->cost) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Rooms') ?></h4>
                <?php if (!empty($furnitureType->rooms)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Building') ?></th>
                            <th><?= __('Capacity') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($furnitureType->rooms as $rooms) : ?>
                        <tr>
                            <td><?= h($rooms->id) ?></td>
                            <td><?= h($rooms->name) ?></td>
                            <td><?= h($rooms->building) ?></td>
                            <td><?= h($rooms->capacity) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Rooms', 'action' => 'view', $rooms->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Rooms', 'action' => 'edit', $rooms->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rooms', 'action' => 'delete', $rooms->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rooms->id)]) ?>
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
