<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Directores Model
 *
 * @method \App\Model\Entity\Directore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Directore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Directore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Directore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Directore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Directore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Directore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DirectoresTable extends Table
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

        $this->setTable('directores');
        $this->setDisplayField('nombre');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp'); 
        
        $this->belongsTo('Escuelas', [
            'foreignKey' => 'cue',
            'joinType' => 'INNER'
        ]);
 
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
            ->scalar('nombre')
            ->maxLength('nombre', 100)
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->scalar('apellido')
            ->maxLength('apellido', 100)
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 20)
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->date('anio')
            ->requirePresence('anio', 'create')
            ->notEmpty('anio');

        $validator
            ->scalar('cue')
            ->maxLength('cue', 9)
            ->requirePresence('cue', 'create')
            ->notEmpty('cue');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
