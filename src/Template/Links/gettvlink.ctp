<script type="text/javascript"> 
function goBack() { 
    window.history.back();
} 
</script>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
       <button onclick="goBack();"> << </button>
    </ul>
</nav>
<div class="tvshows index large-9 medium-8 columns content">
    <h3><?= __('Links') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('icon') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('age') ?></th>
                 <th><?= $this->Paginator->sort('link') ?></th>
                <th><?= $this->Paginator->sort('source') ?></th>
                <th><?= $this->Paginator->sort('vote') ?></th>
                 <th><?= $this->Paginator->sort('video') ?></th>
                <th><?= $this->Paginator->sort('audio') ?></th>
                <th class="actions"><?= __('Action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($links as $links): ?>
            <tr>
                <td><img src="<?php echo $links->icon; ?>"></td>
                <td><?= h($links->name) ?></td>
                <td><?= h($links->age) ?></td>
                <td><?= h($links->link) ?></td>
                <td><?= h($links->source) ?></td>
                <td><?= h($links->vote) ?></td>
                <td><?= h($links->video) ?></td>
                <td><?= h($links->audio) ?></td>
                <td class="action">
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'deletetv', $links->id], ['confirm' => __('Are you sure you want to delete # {0}?', $links->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
