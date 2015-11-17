<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $admin->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $admin->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="admins form large-9 medium-8 columns content">
    <?= $this->Form->create($admin) ?>
    <fieldset>
        <legend><?= __('Edit Admin') ?></legend>
        <?php
            echo $this->Form->input('Email');
            echo $this->Form->input('fName');
            echo $this->Form->input('sName');
            echo $this->Form->input('status');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
