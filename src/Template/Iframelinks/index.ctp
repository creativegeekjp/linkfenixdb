<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Iframelink'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="iframelinks index large-9 medium-8 columns content">
    <h3><?= __('Iframelinks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('count') ?></th>
                <th><?= $this->Paginator->sort('active') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($iframelinks as $iframelink): ?>
            <tr>
                <td><?= $this->Number->format($iframelink->id) ?></td>
                <td><?= h($iframelink->count) ?></td>
                <td><?= h($iframelink->active) ?></td>
                <td><?= h($iframelink->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $iframelink->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $iframelink->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $iframelink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iframelink->id)]) ?>
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
