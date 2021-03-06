<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Customer Entity.
 *
 * @property int $id
 * @property string $fName
 * @property string $sName
 * @property string $Password
 * @property string $address1
 * @property string $address2
 * @property string $county
 * @property string $mobile
 * @property string $email
 * @property string $landline
 * @property \Cake\I18n\Time $CreatedDate
 */
class Customer extends Entity
{
    protected function _setPassword($value) 
    { 
        $hasher = new DefaultPasswordHasher(); 
        return $hasher->hash($value); 
    }

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
