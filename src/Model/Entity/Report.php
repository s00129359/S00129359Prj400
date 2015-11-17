<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Report Entity.
 *
 * @property int $id
 * @property int $AdminId
 * @property int $CustomerId
 * @property string $Brand
 * @property string $Description
 * @property string $Accessories
 * @property string $Notes
 * @property string $Instructions
 * @property \Cake\I18n\Time $CreatedDate
 * @property \Cake\I18n\Time $ModifiedDate
 * @property bool $Status
 * @property bool $Priority
 * @property bool $SmsList
 * @property bool $EmailList
 * @property bool $Finished
 * @property \Cake\I18n\Time $CompletedDate
 * @property string $Conclusion
 * @property bool $Collected
 * @property bool $Paid
 * @property int $AmountDue
 * @property int $SmsSentDate
 * @property int $SmsEmailDate
 */
class Report extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
