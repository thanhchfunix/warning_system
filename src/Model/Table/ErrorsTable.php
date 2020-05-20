<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Errors Model
 *
 * @method \App\Model\Entity\Error newEmptyEntity()
 * @method \App\Model\Entity\Error newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Error[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Error get($primaryKey, $options = [])
 * @method \App\Model\Entity\Error findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Error patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Error[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Error|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Error saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Error[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Error[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Error[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Error[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ErrorsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('errors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('error_name')
            ->maxLength('error_name', 200)
            ->requirePresence('error_name', 'create')
            ->notEmptyString('error_name');

        $validator
            ->scalar('description')
            ->maxLength('description', 200)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->scalar('source')
            ->maxLength('source', 40)
            ->requirePresence('source', 'create')
            ->notEmptyString('source');

        $validator
            ->dateTime('time')
            ->notEmptyDateTime('time');

        return $validator;
    }
}
