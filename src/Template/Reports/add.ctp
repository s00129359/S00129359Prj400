<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="reports form large-9 medium-8 columns content">
    <?= $this->Form->create($report) ?>
    <fieldset>
        <legend><?= __('Add Report') ?></legend>
        <?php
            echo $this->Form->input('AdminId');
            echo $this->Form->input('CustomerId');
            echo $this->Form->input('Brand');
            echo $this->Form->input('Description');
            echo $this->Form->input('Accessories');
            echo $this->Form->input('Notes');
            echo $this->Form->input('Instructions');
            echo $this->Form->input('CreatedDate');
            echo $this->Form->input('ModifiedDate');
            echo $this->Form->input('Status');
            echo $this->Form->input('Priority');
            echo $this->Form->input('SmsList');
            echo $this->Form->input('EmailList');
            echo $this->Form->input('Finished');
            echo $this->Form->input('CompletedDate');
            echo $this->Form->input('Conclusion');
            echo $this->Form->input('Collected');
            echo $this->Form->input('Paid');
            echo $this->Form->input('AmountDue');
            echo $this->Form->input('SmsSentDate');
            echo $this->Form->input('SmsEmailDate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
