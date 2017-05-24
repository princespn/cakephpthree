<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Multiplier'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="multipliers index large-9 medium-8 columns content">
    <h3><?= __('Multipliers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('multiplier') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($multipliers as $multiplier): ?>
            <tr>
                <td><?= $this->Number->format($multiplier->id) ?></td>
                <td><?= h($multiplier->category) ?></td>
                <td><?= h($multiplier->supplier) ?></td>
                <td><?= h($multiplier->multiplier) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $multiplier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $multiplier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $multiplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $multiplier->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
