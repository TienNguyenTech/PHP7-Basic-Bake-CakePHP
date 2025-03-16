<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\FurnitureType> $furnitureTypes
 */
?>
<div class="furnitureTypes index content">
    <?= $this->Html->link(__('New Furniture Type'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Furniture Types') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('cost') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($furnitureTypes as $furnitureType): ?>
                <tr>
                    <td><?= h($furnitureType->id) ?></td>
                    <td><?= h($furnitureType->name) ?></td>
                    <td><?= $this->Number->format($furnitureType->cost) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $furnitureType->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $furnitureType->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $furnitureType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $furnitureType->id)]) ?>
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
