<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AcademicYears Model
 *
 * @property \Cake\ORM\Association\HasMany $Courses
 *
 * @method \App\Model\Entity\AcademicYear get($primaryKey, $options = [])
 * @method \App\Model\Entity\AcademicYear newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AcademicYear[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AcademicYear|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AcademicYear patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicYear[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AcademicYear findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AcademicYearsTable extends Table
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

        $this->table('academic_years');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Courses', [
            'foreignKey' => 'academic_year_id'
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
            ->requirePresence('Nombre', 'create')
            ->notEmpty('Nombre');

        $validator
            ->date('fecha_ini')
            ->requirePresence('fecha_ini', 'create')
            ->notEmpty('fecha_ini');

        $validator
            ->date('fecha_fin')
            ->requirePresence('fecha_fin', 'create')
            ->notEmpty('fecha_fin');

        $validator
            ->boolean('active')
            ->allowEmpty('active');

        return $validator;
    }
}
