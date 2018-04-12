<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escuelas Model
 *
 * @property \App\Model\Table\RegionalesTable|\Cake\ORM\Association\BelongsTo $Regionales
 * @property \App\Model\Table\DirectoresTable|\Cake\ORM\Association\HasMany $Directores
 *
 * @method \App\Model\Entity\Escuela get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escuela newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Escuela[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escuela|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escuela patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escuela[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escuela findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EscuelasTable extends Table
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

        $this->setTable('escuelas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Regionales', [
            'foreignKey' => 'regionale_id',
            'joinType' => 'INNER'
        ]);        
        
         $this->hasMany('Directores')
            ->setForeignKey('escuela_cue');
            
        
//        $this->retornarBusqueda($value = null);
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
            ->integer('cue')
            ->maxLength('cue', 9)    
            ->requirePresence('cue', 'create')
            ->notEmpty('cue');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('tipo')
            ->requirePresence('tipo', 'create')
            ->notEmpty('tipo');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 255)
            ->requirePresence('telefono', 'create')
            ->notEmpty('telefono');

        $validator
            ->scalar('latitud')
            ->maxLength('latitud', 255)
            ->requirePresence('latitud', 'create')
            ->notEmpty('latitud');

        $validator
            ->scalar('longitud')
            ->maxLength('longitud', 255)
            ->requirePresence('longitud', 'create')
            ->notEmpty('longitud');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->requirePresence('descripcion', 'create')
            ->notEmpty('descripcion');

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
        $rules->add($rules->existsIn(['regionale_id'], 'Regionales'));

        return $rules;
    }
    
    public function retornarBusqueda($value) {
        
//        $directores = $this->loadModel('directores');
//        $query = $directores
//                ->find('list')                
//                ->where(['cue' => $value])
//                ->order(['created' => 'DESC']);
//        return $query;
    }

}
