<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tvshows Casts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tvshows'), ['controller' => 'Tvshows', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tvshow'), ['controller' => 'Tvshows', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Casts'), ['controller' => 'Casts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cast'), ['controller' => 'Casts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tvshowsCasts form large-9 medium-8 columns content">
    <?= $this->Form->create($tvshowsCast) ?>
    <fieldset>
        <legend><?= __('Add Tvshows Cast') ?></legend>
        <?php
            echo $this->Form->input('tvshow_id', ['options' => $tvshows]);
            echo $this->Form->input('cast_id', ['options' => $casts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
