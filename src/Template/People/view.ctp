<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="people view large-9 medium-8 columns content">
    <h3><?= h($person->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('First Name') ?></th>
            <td><?= h($person->first_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($person->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($person->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Age') ?></th>
            <td><?= $this->Number->format($person->age) ?></td>
        </tr>
    </table>
</div>
