<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Master Listing'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="masterListings index large-9 medium-8 columns content">
    <h3><?= __('Master Listings') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('error') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($masterListings as $masterListing): ?>
            <tr>
                <td><?= $this->Number->format($masterListing->id) ?></td>
                <td><?= h($masterListing->amazon_sku) ?></td>
                <td><?= h($masterListing->channel_id) ?></td>
                <td><?= h($masterListing->linnworks_code) ?></td>
                <td><?= h($masterListing->price_uk) ?></td>
                <td><?= h($masterListing->sale_price_uk) ?></td>
                <td><?= h($masterListing->price_fr) ?></td>
                <td><?= h($masterListing->sale_price_fr) ?></td>
                <td><?= h($masterListing->price_de) ?></td>
                <td><?= h($masterListing->sale_price_de) ?></td>
                <td><?= h($masterListing->price_es) ?></td>
                <td><?= h($masterListing->sale_price_es) ?></td>
                <td><?= h($masterListing->price_ebay) ?></td>
                <td><?= h($masterListing->sale_price_ebay) ?></td>
                <td><?= h($masterListing->price_cdiscount) ?></td>
                <td><?= h($masterListing->sale_price_cdiscount) ?></td>
                <td><?= h($masterListing->prime_date) ?></td>
                <td><?= h($masterListing->error) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $masterListing->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $masterListing->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $masterListing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $masterListing->id)]) ?>
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
