<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Episode'), ['action' => 'edit', $episode->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Episode'), ['action' => 'delete', $episode->id], ['confirm' => __('Are you sure you want to delete # {0}?', $episode->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Episodes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Episode'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="episodes view large-9 medium-8 columns content">
    <h3><?= h($episode->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($episode->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($episode->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Seasons') ?></h4>
        <?php if (!empty($episode->seasons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($episode->seasons as $seasons): ?>
            <tr>
                <td><?= h($seasons->id) ?></td>
                <td><?= h($seasons->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Seasons', 'action' => 'view', $seasons->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Seasons', 'action' => 'edit', $seasons->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Seasons', 'action' => 'delete', $seasons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $seasons->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
