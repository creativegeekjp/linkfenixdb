<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tvshowsSeason->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tvshowsSeason->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tvshows Seasons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Episodes'), ['controller' => 'Episodes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Episode'), ['controller' => 'Episodes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tvshowsSeasons form large-9 medium-8 columns content">
    <?= $this->Form->create($tvshowsSeason) ?>
    <fieldset>
        <legend><?= __('Edit Tvshows Season') ?></legend>
        <?php
            echo $this->Form->input('season_id', ['options' => $seasons]);
            echo $this->Form->input('tvshow_id', ['options' => $tvshows]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
