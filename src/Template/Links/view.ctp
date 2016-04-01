<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Link'), ['action' => 'edit', $link->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Link'), ['action' => 'delete', $link->id], ['confirm' => __('Are you sure you want to delete # {0}?', $link->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Links'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['controller' => 'Movies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['controller' => 'Movies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Episodes'), ['controller' => 'Episodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Episode'), ['controller' => 'Episodes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="links view large-9 medium-8 columns content">
    <h3><?= h($link->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Movie') ?></th>
            <td><?= $link->has('movie') ? $this->Html->link($link->movie->name, ['controller' => 'Movies', 'action' => 'view', $link->movie->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tvshow') ?></th>
            <td><?= $link->has('tvshow') ? $this->Html->link($link->tvshow->name, ['controller' => 'Tvshows', 'action' => 'view', $link->tvshow->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Episode') ?></th>
            <td><?= $link->has('episode') ? $this->Html->link($link->episode->name, ['controller' => 'Episodes', 'action' => 'view', $link->episode->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Link') ?></th>
            <td><?= h($link->link) ?></td>
        </tr>
        <tr>
            <th><?= __('Source') ?></th>
            <td><?= h($link->source) ?></td>
        </tr>
        <tr>
            <th><?= __('Vote') ?></th>
            <td><?= h($link->vote) ?></td>
        </tr>
        <tr>
            <th><?= __('Video Quality') ?></th>
            <td><?= h($link->video_quality) ?></td>
        </tr>
        <tr>
            <th><?= __('Audio') ?></th>
            <td><?= h($link->audio) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($link->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($link->created) ?></td>
        </tr>
    </table>
</div>
