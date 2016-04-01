<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Season'), ['action' => 'edit', $season->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Season'), ['action' => 'delete', $season->id], ['confirm' => __('Are you sure you want to delete # {0}?', $season->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Seasons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Season'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Episodes'), ['controller' => 'Episodes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Episode'), ['controller' => 'Episodes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="seasons view large-9 medium-8 columns content">
    <h3><?= h($season->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($season->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($season->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Episodes') ?></h4>
        <?php if (!empty($season->episodes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($season->episodes as $episodes): ?>
            <tr>
                <td><?= h($episodes->id) ?></td>
                <td><?= h($episodes->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Episodes', 'action' => 'view', $episodes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Episodes', 'action' => 'edit', $episodes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Episodes', 'action' => 'delete', $episodes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $episodes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tvshows') ?></h4>
        <?php if (!empty($season->tvshows)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Year') ?></th>
                <th><?= __('Quality') ?></th>
                <th><?= __('Linkage') ?></th>
                <th><?= __('IMDB') ?></th>
                <th><?= __('Hostlink') ?></th>
                <th><?= __('Country') ?></th>
                <th><?= __('Duration') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Releasedate') ?></th>
                <th><?= __('Director') ?></th>
                <th><?= __('Languages') ?></th>
                <th><?= __('Image') ?></th>
                <th><?= __('Created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($season->tvshows as $tvshows): ?>
            <tr>
                <td><?= h($tvshows->id) ?></td>
                <td><?= h($tvshows->name) ?></td>
                <td><?= h($tvshows->year) ?></td>
                <td><?= h($tvshows->quality) ?></td>
                <td><?= h($tvshows->linkage) ?></td>
                <td><?= h($tvshows->IMDB) ?></td>
                <td><?= h($tvshows->hostlink) ?></td>
                <td><?= h($tvshows->country) ?></td>
                <td><?= h($tvshows->duration) ?></td>
                <td><?= h($tvshows->description) ?></td>
                <td><?= h($tvshows->releasedate) ?></td>
                <td><?= h($tvshows->director) ?></td>
                <td><?= h($tvshows->languages) ?></td>
                <td><?= h($tvshows->image) ?></td>
                <td><?= h($tvshows->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tvshows', 'action' => 'view', $tvshows->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tvshows', 'action' => 'edit', $tvshows->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tvshows', 'action' => 'delete', $tvshows->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tvshows->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
