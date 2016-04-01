<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tvshows Genre'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tvshowsGenres index large-9 medium-8 columns content">
    <h3><?= __('Tvshows Genres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tvshow_id') ?></th>
                <th><?= $this->Paginator->sort('genre_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tvshowsGenres as $tvshowsGenre): ?>
            <tr>
                <td><?= $this->Number->format($tvshowsGenre->id) ?></td>
                <td><?= $tvshowsGenre->has('tvshow') ? $this->Html->link($tvshowsGenre->tvshow->name, ['controller' => 'Tvshows', 'action' => 'view', $tvshowsGenre->tvshow->id]) : '' ?></td>
                <td><?= $tvshowsGenre->has('genre') ? $this->Html->link($tvshowsGenre->genre->name, ['controller' => 'Genres', 'action' => 'view', $tvshowsGenre->genre->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tvshowsGenre->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tvshowsGenre->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tvshowsGenre->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshowsGenre->id)]) ?>
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
