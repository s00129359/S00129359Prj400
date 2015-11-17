<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="admins index large-9 medium-8 columns content">
    <h3><?= __('Admins') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Id') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('fName') ?></th>
                <th><?= $this->Paginator->sort('sName') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($admins as $admin): ?>
            <tr>
                <td><?= $this->Number->format($admin->Id) ?></td>
                <td><?= h($admin->Email) ?></td>
                <td><?= h($admin->fName) ?></td>
                <td><?= h($admin->sName) ?></td>
                <td><?= h($admin->status) ?></td>
                <td><?= h($admin->password) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $admin->Id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $admin->Id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $admin->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $admin->Id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
