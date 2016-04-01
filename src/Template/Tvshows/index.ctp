<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tvshow'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
        

        <li><?= $this->Html->link(__('Add Cast'), ['controller' => 'TvshowsCasts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Assign Genre'), ['controller' => 'TvshowsGenres', 'action' => 'add']) ?></li>
        
    </ul>
</nav>
<div class="tvshows index large-9 medium-8 columns content">
    <h3><?= __('Tvshows') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>
                <th><?= $this->Paginator->sort('quality') ?></th>
                <th><?= $this->Paginator->sort('linkage') ?></th>
                <th><?= $this->Paginator->sort('IMDB') ?></th>
                <th><?= $this->Paginator->sort('hostlink') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tvshows as $tvshow): ?>
            <tr>
                <td><?= $this->Number->format($tvshow->id) ?></td>
                <td><?= h($tvshow->name) ?></td>
                <td><?= h($tvshow->year) ?></td>
                <td><?= h($tvshow->quality) ?></td>
                <td><?= h($tvshow->linkage) ?></td>
                <td><?= h($tvshow->IMDB) ?></td>
                <td><?= h($tvshow->hostlink) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tvshow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tvshow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tvshow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshow->id)]) ?>
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
