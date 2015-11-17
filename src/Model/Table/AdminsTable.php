<?php
namespace App\Model\Table;

use App\Model\Entity\Admin;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Admins Model
 *
 */
class AdminsTable extends Table
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

        $this->table('admins');
        $this->displayField('Id');
        $this->primaryKey('Id');

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
            ->add('Id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('Id', 'create');

        $validator
            ->requirePresence('Email', 'create')
            ->notEmpty('Email');

        $validator
            ->requirePresence('fName', 'create')
            ->notEmpty('fName');

        $validator
            ->requirePresence('sName', 'create')
            ->notEmpty('sName');

        $validator
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        return $validator;
    }
}
