<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tvshow'), ['action' => 'edit', $tvshow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tvshow'), ['action' => 'delete', $tvshow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshow'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tvshows view large-9 medium-8 columns content">
    <h3><?= h($tvshow->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($tvshow->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Quality') ?></th>
            <td><?= h($tvshow->quality) ?></td>
        </tr>
        <tr>
            <th><?= __('Linkage') ?></th>
            <td><?= h($tvshow->linkage) ?></td>
        </tr>
        <tr>
            <th><?= __('IMDB') ?></th>
            <td><?= h($tvshow->IMDB) ?></td>
        </tr>
        <tr>
            <th><?= __('Hostlink') ?></th>
            <td><?= h($tvshow->hostlink) ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= h($tvshow->country) ?></td>
        </tr>
        <tr>
            <th><?= __('Duration') ?></th>
            <td><?= h($tvshow->duration) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($tvshow->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Director') ?></th>
            <td><?= h($tvshow->director) ?></td>
        </tr>
        <tr>
            <th><?= __('Languages') ?></th>
            <td><?= h($tvshow->languages) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= h($tvshow->image) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tvshow->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Year') ?></th>
            <td><?= h($tvshow->year) ?></td>
        </tr>
        <tr>
            <th><?= __('Releasedate') ?></th>
            <td><?= h($tvshow->releasedate) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tvshow->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Seasons') ?></h4>
        <?php if (!empty($tvshow->seasons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tvshow->seasons as $seasons): ?>
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
