<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tvshows Season'), ['action' => 'edit', $tvshowsSeason->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tvshows Season'), ['action' => 'delete', $tvshowsSeason->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshowsSeason->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows Seasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshows Season'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Episodes'), ['controller' => 'Episodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Episode'), ['controller' => 'Episodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tvshowsSeasons view large-9 medium-8 columns content">
    <h3><?= h($tvshowsSeason->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Season') ?></th>
            <td><?= $tvshowsSeason->has('season') ? $this->Html->link($tvshowsSeason->season->name, ['controller' => 'Seasons', 'action' => 'view', $tvshowsSeason->season->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tvshow') ?></th>
            <td><?= $tvshowsSeason->has('tvshow') ? $this->Html->link($tvshowsSeason->tvshow->name, ['controller' => 'Tvshows', 'action' => 'view', $tvshowsSeason->tvshow->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tvshowsSeason->id) ?></td>
        </tr>
    </table>
</div>
