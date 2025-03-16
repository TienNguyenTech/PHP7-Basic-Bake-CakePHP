<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FurnitureTypes Model
 *
 * @property \App\Model\Table\RoomsTable&\Cake\ORM\Association\BelongsToMany $Rooms
 *
 * @method \App\Model\Entity\FurnitureType newEmptyEntity()
 * @method \App\Model\Entity\FurnitureType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\FurnitureType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FurnitureType get($primaryKey, $options = [])
 * @method \App\Model\Entity\FurnitureType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\FurnitureType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FurnitureType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\FurnitureType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FurnitureType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FurnitureType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FurnitureType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\FurnitureType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\FurnitureType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FurnitureTypesTable extends Table
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

        $this->setTable('furniture_types');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Rooms', [
            'foreignKey' => 'furniture_type_id',
            'targetForeignKey' => 'room_id',
            'joinTable' => 'furniture_types_rooms',
        ]);
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->decimal('cost')
            ->requirePresence('cost', 'create')
            ->notEmptyString('cost');

        return $validator;
    }
}
