<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movie'), ['action' => 'edit', $movie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movie'), ['action' => 'delete', $movie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Links'), ['controller' => 'Links', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Link'), ['controller' => 'Links', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Casts'), ['controller' => 'Casts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cast'), ['controller' => 'Casts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movies view large-9 medium-8 columns content">
     
    <h3><?= h($movie->name) ?></h3>
    <table class="vertical-table">
     
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($movie->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Quality') ?></th>
            <td><?= h($movie->quality) ?></td>
        </tr>
        <tr>
            <th><?= __('Linkage') ?></th>
            <td><?= h($movie->linkage) ?></td>
        </tr>
        <tr>
            <th><?= __('IMDB') ?></th>
            <td><?= h($movie->IMDB) ?></td>
        </tr>
        <tr>
            <th><?= __('Hostlink') ?></th>
            <td><?= h($movie->hostlink) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($movie->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Duration') ?></th>
            <td><?= h($movie->duration) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($movie->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Director') ?></th>
            <td><?= h($movie->director) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($movie->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= h($movie->year) ?></td>
        </tr>
        <tr>
            <th><?= __('Releasedate') ?></th>
            <td><?= h($movie->releasedate) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($movie->created) ?></td>
        </tr>
        
    </table>
    <div class="related">
        <h4><?= __('Related Links') ?></h4>
        <?php if (!empty($movie->links)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Movie Id') ?></th>
                <th><?= __('Link') ?></th>
                <th><?= __('Source') ?></th>
                <th><?= __('Vote') ?></th>
                <th><?= __('Video Quality') ?></th>
                <th><?= __('Audio') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($movie->links as $links): ?>
            <tr>
                <td><?= h($links->id) ?></td>
                <td><?= h($links->movie_id) ?></td>
                <td><?= h($links->link) ?></td>
                <td><?= h($links->source) ?></td>
                <td><?= h($links->vote) ?></td>
                <td><?= h($links->video_quality) ?></td>
                <td><?= h($links->audio) ?></td>
                <td><?= h($links->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Links', 'action' => 'view', $links->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Links', 'action' => 'edit', $links->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Links', 'action' => 'delete', $links->id], ['confirm' => __('Are you sure you want to delete # {0}?', $links->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Casts') ?></h4>
        <?php if (!empty($movie->casts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($movie->casts as $casts): ?>
            <tr>
                <td><?= h($casts->id) ?></td>
                <td><?= h($casts->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Casts', 'action' => 'view', $casts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Casts', 'action' => 'edit', $casts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Casts', 'action' => 'delete', $casts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $casts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Genres') ?></h4>
        <?php if (!empty($movie->genres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($movie->genres as $genres): ?>
            <tr>
                <td><?= h($genres->id) ?></td>
                <td><?= h($genres->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Genres', 'action' => 'view', $genres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Genres', 'action' => 'edit', $genres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Genres', 'action' => 'delete', $genres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $genres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
