<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tvshows Season'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Episodes'), ['controller' => 'Episodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Episode'), ['controller' => 'Episodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tvshowsSeasons index large-9 medium-8 columns content">
    <h3><?= __('Tvshows Seasons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('season_id') ?></th>
                <th><?= $this->Paginator->sort('tvshow_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tvshowsSeasons as $tvshowsSeason): ?>
            <tr>
                <td><?= $this->Number->format($tvshowsSeason->id) ?></td>
                <td><?= $tvshowsSeason->has('season') ? $this->Html->link($tvshowsSeason->season->name, ['controller' => 'Seasons', 'action' => 'view', $tvshowsSeason->season->id]) : '' ?></td>
                <td><?= $tvshowsSeason->has('tvshow') ? $this->Html->link($tvshowsSeason->tvshow->name, ['controller' => 'Tvshows', 'action' => 'view', $tvshowsSeason->tvshow->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tvshowsSeason->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tvshowsSeason->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tvshowsSeason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshowsSeason->id)]) ?>
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
