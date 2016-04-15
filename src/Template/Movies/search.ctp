<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <?php 
        echo $this->Form->create(null, ['url' => ['controller' => 'Movies', 'action' => 'search'] ]);
        echo $this->Form->input('search' , array('name' => 'search',  'type' => 'text', 'placeholder' => 'Movie name...' ));
        echo $this->Form->button('Search' , array('name' => 'submit',  'type' => 'submit'));
        echo $this->Form->end();
        ?>
        
    </ul>
</nav>
<div class="tvshows index large-9 medium-8 columns content">
    <h3><?= __('Movies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('year') ?></th>
                <th class="actions"><?= __('Action') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movie as $movie): ?>
            <tr>
                <td><?= $this->Number->format($movie->id) ?></td>
                <td><?= h($movie->name) ?></td>
                <td><?= h($movie->year) ?></td>
              
                <td class="actions">
                    <?= $this->Html->link(__('Load Links'), ['controller' => 'Links', 'action' => 'edit', $movie->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
