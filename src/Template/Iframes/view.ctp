<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Iframe'), ['action' => 'edit', $iframe->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Iframe'), ['action' => 'delete', $iframe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iframe->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Iframes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iframe'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iframes view large-9 medium-8 columns content">
    <h3><?= h($iframe->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($iframe->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= h($iframe->active) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($iframe->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($iframe->created) ?></td>
        </tr>
    </table>
</div>
