<?php
namespace App\Model\Table;

use App\Model\Entity\SeasonsEpisode;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SeasonsEpisodes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Episodes
 * @property \Cake\ORM\Association\BelongsTo $Seasons
 */
class SeasonsEpisodesTable extends Table
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

        $this->table('seasons_episodes');

        $this->belongsTo('Episodes', [
            'foreignKey' => 'episode_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Seasons', [
            'foreignKey' => 'season_id',
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
            ->requirePresence('id', 'create')
            ->notEmpty('id');

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
        $rules->add($rules->existsIn(['episode_id'], 'Episodes'));
        $rules->add($rules->existsIn(['season_id'], 'Seasons'));
        return $rules;
    }
}
