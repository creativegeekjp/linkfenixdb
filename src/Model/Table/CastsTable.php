<?php
namespace App\Model\Table;

use App\Model\Entity\Cast;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Casts Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Movies
 */
class CastsTable extends Table
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

        $this->table('casts');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsToMany('Movies', [
            'foreignKey' => 'cast_id',
            'targetForeignKey' => 'movie_id',
            'joinTable' => 'movies_casts'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        return $validator;
    }
}
