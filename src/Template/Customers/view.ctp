<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('FName') ?></th>
            <td><?= h($customer->fName) ?></td>
        </tr>
        <tr>
            <th><?= __('SName') ?></th>
            <td><?= h($customer->sName) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($customer->Password) ?></td>
        </tr>
        <tr>
            <th><?= __('Address1') ?></th>
            <td><?= h($customer->address1) ?></td>
        </tr>
        <tr>
            <th><?= __('Address2') ?></th>
            <td><?= h($customer->address2) ?></td>
        </tr>
        <tr>
            <th><?= __('County') ?></th>
            <td><?= h($customer->county) ?></td>
        </tr>
        <tr>
            <th><?= __('Mobile') ?></th>
            <td><?= h($customer->mobile) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($customer->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Landline') ?></th>
            <td><?= h($customer->landline) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th><?= __('CreatedDate') ?></th>
            <td><?= h($customer->CreatedDate) ?></td>
        </tr>
    </table>
</div>
