<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CostSettings Model
 *
 * @method \App\Model\Entity\CostSetting get($primaryKey, $options = [])
 * @method \App\Model\Entity\CostSetting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CostSetting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CostSetting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CostSetting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CostSetting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CostSetting findOrCreate($search, callable $callback = null, $options = [])
 */
class CostSettingsTable extends Table
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

        $this->setTable('cost_settings');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('sale_base_currency');

        $validator
            ->allowEmpty('invoice_currency');

        $validator
            ->allowEmpty('exchange_rate');

        $validator
            ->integer('variation')
            ->requirePresence('variation', 'create')
            ->notEmpty('variation');

        return $validator;
    }
}
