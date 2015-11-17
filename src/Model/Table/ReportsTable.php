<?php
namespace App\Model\Table;

use App\Model\Entity\Report;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Reports Model
 *
 */
class ReportsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('reports');
        $this->displayField('id');
        $this->primaryKey('id');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('AdminId', 'valid', ['rule' => 'numeric'])
            ->requirePresence('AdminId', 'create')
            ->notEmpty('AdminId');

        $validator
            ->add('CustomerId', 'valid', ['rule' => 'numeric'])
            ->requirePresence('CustomerId', 'create')
            ->notEmpty('CustomerId');

        $validator
            ->requirePresence('Brand', 'create')
            ->notEmpty('Brand');

        $validator
            ->requirePresence('Description', 'create')
            ->notEmpty('Description');

        $validator
            ->requirePresence('Accessories', 'create')
            ->notEmpty('Accessories');

        $validator
            ->requirePresence('Notes', 'create')
            ->notEmpty('Notes');

        $validator
            ->requirePresence('Instructions', 'create')
            ->notEmpty('Instructions');

        $validator
            ->add('CreatedDate', 'valid', ['rule' => 'datetime'])
            ->requirePresence('CreatedDate', 'create')
            ->notEmpty('CreatedDate');

        $validator
            ->add('ModifiedDate', 'valid', ['rule' => 'datetime'])
            ->requirePresence('ModifiedDate', 'create')
            ->notEmpty('ModifiedDate');

        $validator
            ->add('Status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('Status', 'create')
            ->notEmpty('Status');

        $validator
            ->add('Priority', 'valid', ['rule' => 'boolean'])
            ->requirePresence('Priority', 'create')
            ->notEmpty('Priority');

        $validator
            ->add('SmsList', 'valid', ['rule' => 'boolean'])
            ->requirePresence('SmsList', 'create')
            ->notEmpty('SmsList');

        $validator
            ->add('EmailList', 'valid', ['rule' => 'boolean'])
            ->requirePresence('EmailList', 'create')
            ->notEmpty('EmailList');

        $validator
            ->add('Finished', 'valid', ['rule' => 'boolean'])
            ->requirePresence('Finished', 'create')
            ->notEmpty('Finished');

        $validator
            ->add('CompletedDate', 'valid', ['rule' => 'datetime'])
            ->requirePresence('CompletedDate', 'create')
            ->notEmpty('CompletedDate');

        $validator
            ->requirePresence('Conclusion', 'create')
            ->notEmpty('Conclusion');

        $validator
            ->add('Collected', 'valid', ['rule' => 'boolean'])
            ->requirePresence('Collected', 'create')
            ->notEmpty('Collected');

        $validator
            ->add('Paid', 'valid', ['rule' => 'boolean'])
            ->requirePresence('Paid', 'create')
            ->notEmpty('Paid');

        $validator
            ->add('AmountDue', 'valid', ['rule' => 'numeric'])
            ->requirePresence('AmountDue', 'create')
            ->notEmpty('AmountDue');

        $validator
            ->add('SmsSentDate', 'valid', ['rule' => 'numeric'])
            ->requirePresence('SmsSentDate', 'create')
            ->notEmpty('SmsSentDate');

        $validator
            ->add('SmsEmailDate', 'valid', ['rule' => 'numeric'])
            ->requirePresence('SmsEmailDate', 'create')
            ->notEmpty('SmsEmailDate');

        return $validator;
    }
}
