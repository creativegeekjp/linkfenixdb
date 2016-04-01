<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tvshows Cast'), ['action' => 'edit', $tvshowsCast->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tvshows Cast'), ['action' => 'delete', $tvshowsCast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshowsCast->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows Casts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshows Cast'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Casts'), ['controller' => 'Casts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cast'), ['controller' => 'Casts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tvshowsCasts view large-9 medium-8 columns content">
    <h3><?= h($tvshowsCast->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tvshow') ?></th>
            <td><?= $tvshowsCast->has('tvshow') ? $this->Html->link($tvshowsCast->tvshow->name, ['controller' => 'Tvshows', 'action' => 'view', $tvshowsCast->tvshow->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cast') ?></th>
            <td><?= $tvshowsCast->has('cast') ? $this->Html->link($tvshowsCast->cast->name, ['controller' => 'Casts', 'action' => 'view', $tvshowsCast->cast->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tvshowsCast->id) ?></td>
        </tr>
    </table>
</div>
