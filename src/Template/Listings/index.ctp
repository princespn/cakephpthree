<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Listing'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="listings index large-9 medium-8 columns content">
    <h3><?= __('Listings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_sku') ?></th>
                <th scope="col"><?= $this->Paginator->sort('linnworks_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_price_uk') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_sale_price_uk') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_price_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_sale_price_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_price_de') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_sale_price_de') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_price_dm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_sale_price_dm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_price_tesco') ?></th>
                <th scope="col"><?= $this->Paginator->sort('web_sale_price_tesco') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listings as $listing): ?>
            <tr>
                <td><?= $this->Number->format($listing->id) ?></td>
                <td><?= h($listing->web_sku) ?></td>
                <td><?= h($listing->linnworks_code) ?></td>
                <td><?= h($listing->web_price_uk) ?></td>
                <td><?= h($listing->web_sale_price_uk) ?></td>
                <td><?= h($listing->web_price_fr) ?></td>
                <td><?= h($listing->web_sale_price_fr) ?></td>
                <td><?= h($listing->web_price_de) ?></td>
                <td><?= h($listing->web_sale_price_de) ?></td>
                <td><?= h($listing->web_price_dm) ?></td>
                <td><?= h($listing->web_sale_price_dm) ?></td>
                <td><?= h($listing->web_price_tesco) ?></td>
                <td><?= h($listing->web_sale_price_tesco) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $listing->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listing->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listing->id)]) ?>
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
