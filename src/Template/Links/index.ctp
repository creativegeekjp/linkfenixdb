<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Link'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Episodes'), ['controller' => 'Episodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Episode'), ['controller' => 'Episodes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="links index large-9 medium-8 columns content">
    <h3><?= __('Links') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('movie_id') ?></th>
                <th><?= $this->Paginator->sort('tvshow_id') ?></th>
                <th><?= $this->Paginator->sort('episode_id') ?></th>
                <th><?= $this->Paginator->sort('link') ?></th>
                <th><?= $this->Paginator->sort('source') ?></th>
                <th><?= $this->Paginator->sort('vote') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($links as $link): ?>
            <tr>
                <td><?= $this->Number->format($link->id) ?></td>
                <td><?= $link->has('movie') ? $this->Html->link($link->movie->name, ['controller' => 'Movies', 'action' => 'view', $link->movie->id]) : '' ?></td>
                <td><?= $link->has('tvshow') ? $this->Html->link($link->tvshow->name, ['controller' => 'Tvshows', 'action' => 'view', $link->tvshow->id]) : '' ?></td>
                <td><?= $link->has('episode') ? $this->Html->link($link->episode->name, ['controller' => 'Episodes', 'action' => 'view', $link->episode->id]) : '' ?></td>
                <td><?= h($link->link) ?></td>
                <td><?= h($link->source) ?></td>
                <td><?= h($link->vote) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $link->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $link->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $link->id], ['confirm' => __('Are you sure you want to delete # {0}?', $link->id)]) ?>
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
