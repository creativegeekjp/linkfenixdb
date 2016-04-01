<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tvshows'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tvshows form large-9 medium-8 columns content">
    <?= $this->Form->create($tvshow) ?>
    <fieldset>
        <legend><?= __('Add Tvshow') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('year');
            echo $this->Form->input('quality');
            echo $this->Form->input('linkage');
            echo $this->Form->input('IMDB');
            echo $this->Form->input('hostlink');
            echo $this->Form->input('country');
            echo $this->Form->input('duration');
            echo $this->Form->input('description');
            echo $this->Form->input('releasedate');
            echo $this->Form->input('director');
            echo $this->Form->input('languages');
            echo $this->Form->input('image');
            echo $this->Form->input('seasons._ids', ['options' => $seasons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
