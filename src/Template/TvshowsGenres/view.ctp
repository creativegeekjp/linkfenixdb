<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tvshows Genre'), ['action' => 'edit', $tvshowsGenre->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tvshows Genre'), ['action' => 'delete', $tvshowsGenre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshowsGenre->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows Genres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshows Genre'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tvshowsGenres view large-9 medium-8 columns content">
    <h3><?= h($tvshowsGenre->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tvshow') ?></th>
            <td><?= $tvshowsGenre->has('tvshow') ? $this->Html->link($tvshowsGenre->tvshow->name, ['controller' => 'Tvshows', 'action' => 'view', $tvshowsGenre->tvshow->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Genre') ?></th>
            <td><?= $tvshowsGenre->has('genre') ? $this->Html->link($tvshowsGenre->genre->name, ['controller' => 'Genres', 'action' => 'view', $tvshowsGenre->genre->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tvshowsGenre->id) ?></td>
        </tr>
    </table>
</div>
