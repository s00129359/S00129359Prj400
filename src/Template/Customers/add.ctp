<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?php
            echo $this->Form->input('fName');
            echo $this->Form->input('sName');
            echo $this->Form->input('Password');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('county');
            echo $this->Form->input('mobile');
            echo $this->Form->input('email');
            echo $this->Form->input('landline');
            echo $this->Form->input('CreatedDate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
