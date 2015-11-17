<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin'), ['action' => 'edit', $admin->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin'), ['action' => 'delete', $admin->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="admins view large-9 medium-8 columns content">
    <h3><?= h($admin->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($admin->Email) ?></td>
        </tr>
        <tr>
            <th><?= __('FName') ?></th>
            <td><?= h($admin->fName) ?></td>
        </tr>
        <tr>
            <th><?= __('SName') ?></th>
            <td><?= h($admin->sName) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($admin->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($admin->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($admin->Id) ?></td>
        </tr>
    </table>
</div>
