<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reports view large-9 medium-8 columns content">
    <h3><?= h($report->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Brand') ?></th>
            <td><?= h($report->Brand) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($report->id) ?></td>
        </tr>
        <tr>
            <th><?= __('AdminId') ?></th>
            <td><?= $this->Number->format($report->AdminId) ?></td>
        </tr>
        <tr>
            <th><?= __('CustomerId') ?></th>
            <td><?= $this->Number->format($report->CustomerId) ?></td>
        </tr>
        <tr>
            <th><?= __('AmountDue') ?></th>
            <td><?= $this->Number->format($report->AmountDue) ?></td>
        </tr>
        <tr>
            <th><?= __('SmsSentDate') ?></th>
            <td><?= $this->Number->format($report->SmsSentDate) ?></td>
        </tr>
        <tr>
            <th><?= __('SmsEmailDate') ?></th>
            <td><?= $this->Number->format($report->SmsEmailDate) ?></td>
        </tr>
        <tr>
            <th><?= __('CreatedDate') ?></th>
            <td><?= h($report->CreatedDate) ?></td>
        </tr>
        <tr>
            <th><?= __('ModifiedDate') ?></th>
            <td><?= h($report->ModifiedDate) ?></td>
        </tr>
        <tr>
            <th><?= __('CompletedDate') ?></th>
            <td><?= h($report->CompletedDate) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $report->Status ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Priority') ?></th>
            <td><?= $report->Priority ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('SmsList') ?></th>
            <td><?= $report->SmsList ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('EmailList') ?></th>
            <td><?= $report->EmailList ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Finished') ?></th>
            <td><?= $report->Finished ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Collected') ?></th>
            <td><?= $report->Collected ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Paid') ?></th>
            <td><?= $report->Paid ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($report->Description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Accessories') ?></h4>
        <?= $this->Text->autoParagraph(h($report->Accessories)); ?>
    </div>
    <div class="row">
        <h4><?= __('Notes') ?></h4>
        <?= $this->Text->autoParagraph(h($report->Notes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Instructions') ?></h4>
        <?= $this->Text->autoParagraph(h($report->Instructions)); ?>
    </div>
    <div class="row">
        <h4><?= __('Conclusion') ?></h4>
        <?= $this->Text->autoParagraph(h($report->Conclusion)); ?>
    </div>
</div>
