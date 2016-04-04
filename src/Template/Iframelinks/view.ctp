<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Iframelink'), ['action' => 'edit', $iframelink->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Iframelink'), ['action' => 'delete', $iframelink->id], ['confirm' => __('Are you sure you want to delete # {0}?', $iframelink->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Iframelinks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Iframelink'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="iframelinks view large-9 medium-8 columns content">
    <h3><?= h($iframelink->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Count') ?></th>
            <td><?= h($iframelink->count) ?></td>
        </tr>
        <tr>
            <th><?= __('Active') ?></th>
            <td><?= h($iframelink->active) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($iframelink->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($iframelink->created) ?></td>
        </tr>
    </table>
</div>
