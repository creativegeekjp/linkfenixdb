<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Movies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Links'), ['controller' => 'Links', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Link'), ['controller' => 'Links', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Casts'), ['controller' => 'Casts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cast'), ['controller' => 'Casts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Genres'), ['controller' => 'Genres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genre'), ['controller' => 'Genres', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movies form large-9 medium-8 columns content">
    <?= $this->Form->create($movie) ?>
    <fieldset>
        <legend><?= __('Add Movie') ?></legend>
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
            echo $this->Form->input('casts._ids', ['options' => $casts]);
            echo $this->Form->input('genres._ids', ['options' => $genres]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
