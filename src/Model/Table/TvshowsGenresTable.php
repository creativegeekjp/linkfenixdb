<?php
namespace App\Model\Table;

use App\Model\Entity\TvshowsGenre;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TvshowsGenres Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tvshows
 * @property \Cake\ORM\Association\BelongsTo $Genres
 */
class TvshowsGenresTable extends Table
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

        $this->table('tvshows_genres');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Tvshows', [
            'foreignKey' => 'tvshow_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Genres', [
            'foreignKey' => 'genre_id',
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
        $rules->add($rules->existsIn(['tvshow_id'], 'Tvshows'));
        $rules->add($rules->existsIn(['genre_id'], 'Genres'));
        return $rules;
    }
}
