<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $episode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $episode->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Episodes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Seasons'), ['controller' => 'Seasons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Season'), ['controller' => 'Seasons', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="episodes form large-9 medium-8 columns content">
    <?= $this->Form->create($episode) ?>
    <fieldset>
        <legend><?= __('Edit Episode') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('seasons._ids', ['options' => $seasons]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
