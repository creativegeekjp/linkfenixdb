<?php
namespace App\Model\Table;

use App\Model\Entity\Link;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Links Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Movies
 * @property \Cake\ORM\Association\BelongsTo $Tvshows
 * @property \Cake\ORM\Association\BelongsTo $Episodes
 */
class LinksTable extends Table
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

        $this->table('links');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Movies');
        
        $this->belongsTo('Tvshows');
        
        $this->belongsTo('Episodes');
        
        //inali ni jino $this->belongsTo('Episodes', [
        //     'foreignKey' => 'episode_id',
        //     'joinType' => 'INNER'
        // ]);
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
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->requirePresence('source', 'create')
            ->notEmpty('source');

        $validator
            ->requirePresence('vote', 'create')
            ->notEmpty('vote');

        $validator
            ->requirePresence('video_quality', 'create')
            ->notEmpty('video_quality');

        $validator
            ->requirePresence('audio', 'create')
            ->notEmpty('audio');

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
        $rules->add($rules->existsIn(['movie_id'], 'Movies'));
        $rules->add($rules->existsIn(['tvshow_id'], 'Tvshows'));
        $rules->add($rules->existsIn(['episode_id'], 'Episodes'));
        return $rules;
    }
}
