<?php
namespace App\Model\Table;

use App\Model\Entity\Tvshow;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tvshows Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Seasons
 */
class TvshowsTable extends Table
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

        $this->table('tvshows');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        
         $this->hasMany('Links', [
            'foreignKey' => 'tvshow_id'
        ]);
        
        $this->belongsToMany('Seasons', [
            'foreignKey' => 'tvshow_id',
            'targetForeignKey' => 'season_id',
            'joinTable' => 'tvshows_seasons'
        ]);
        
        $this->belongsToMany('Casts', [
            'foreignKey' => 'tvshow_id',
            'targetForeignKey' => 'cast_id',
            'joinTable' => 'tvshows_casts'
        ]);
        
        $this->belongsToMany('Genres', [
            'foreignKey' => 'tvshow_id',
            'targetForeignKey' => 'genre_id',
            'joinTable' => 'tvshows_genres'
        ]);
        
        $this->hasMany('Seasons');
        
        
        
      
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

        $validator
            ->date('year')
            ->requirePresence('year', 'create')
            ->notEmpty('year');

        $validator
            ->requirePresence('quality', 'create')
            ->notEmpty('quality');

        $validator
            ->requirePresence('linkage', 'create')
            ->notEmpty('linkage');

        $validator
            ->requirePresence('IMDB', 'create')
            ->notEmpty('IMDB');

        $validator
            ->requirePresence('hostlink', 'create')
            ->notEmpty('hostlink');

        $validator
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->requirePresence('duration', 'create')
            ->notEmpty('duration');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->date('releasedate')
            ->requirePresence('releasedate', 'create')
            ->notEmpty('releasedate');

        $validator
            ->requirePresence('director', 'create')
            ->notEmpty('director');

        $validator
            ->requirePresence('languages', 'create')
            ->notEmpty('languages');

        $validator
            ->requirePresence('image', 'create')
            ->notEmpty('image');

        return $validator;
    }
}
