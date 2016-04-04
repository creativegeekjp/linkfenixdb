<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Iframe'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="iframes index large-9 medium-8 columns content">
    <h3><?= __('Iframes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($iframes as $iframe): ?>
            <tr>
                <td><?= $this->Number->format($iframe->id) ?></td>
                <td><?= h($iframe->name) ?></td>
                <td><?= h($iframe->active) ?></td>
                <td><?= h($iframe->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $iframe->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iframe->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iframe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iframe->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
