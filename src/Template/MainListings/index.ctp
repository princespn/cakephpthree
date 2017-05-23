<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Main Listing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Channels'), ['controller' => 'Channels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Channel'), ['controller' => 'Channels', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mainListings index large-9 medium-8 columns content">
    <h3><?= __('Main Listings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amazon_sku') ?></th>
                <th scope="col"><?= $this->Paginator->sort('channel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('linnworks_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_uk') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_price_uk') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_price_fr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_de') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_price_de') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_es') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_price_es') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_ebay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_price_ebay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_cdiscount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sale_price_cdiscount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prime_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mainListings as $mainListing): ?>
            <tr>
                <td><?= $this->Number->format($mainListing->id) ?></td>
                <td><?= h($mainListing->amazon_sku) ?></td>
                <td><?= $mainListing->has('channel') ? $this->Html->link($mainListing->channel->id, ['controller' => 'Channels', 'action' => 'view', $mainListing->channel->id]) : '' ?></td>
                <td><?= h($mainListing->linnworks_code) ?></td>
                <td><?= h($mainListing->price_uk) ?></td>
                <td><?= h($mainListing->sale_price_uk) ?></td>
                <td><?= h($mainListing->price_fr) ?></td>
                <td><?= h($mainListing->sale_price_fr) ?></td>
                <td><?= h($mainListing->price_de) ?></td>
                <td><?= h($mainListing->sale_price_de) ?></td>
                <td><?= h($mainListing->price_es) ?></td>
                <td><?= h($mainListing->sale_price_es) ?></td>
                <td><?= h($mainListing->price_ebay) ?></td>
                <td><?= h($mainListing->sale_price_ebay) ?></td>
                <td><?= h($mainListing->price_cdiscount) ?></td>
                <td><?= h($mainListing->sale_price_cdiscount) ?></td>
                <td><?= h($mainListing->prime_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mainListing->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mainListing->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mainListing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mainListing->id)]) ?>
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
