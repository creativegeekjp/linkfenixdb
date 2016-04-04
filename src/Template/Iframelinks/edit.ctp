<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $iframelink->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iframelink->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Iframelinks'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="iframelinks form large-9 medium-8 columns content">
    <?= $this->Form->create($iframelink) ?>
    <fieldset>
        <legend><?= __('Edit Iframelink') ?></legend>
        <?php
            echo $this->Form->input('count');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
