<?php
namespace App\Model\Table;

use App\Model\Entity\Movie;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Movies Model
 *
 * @property \Cake\ORM\Association\HasMany $Links
 * @property \Cake\ORM\Association\BelongsToMany $Casts
 * @property \Cake\ORM\Association\BelongsToMany $Genres
 */
class MoviesTable extends Table
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

        $this->table('movies');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Links', [
            'foreignKey' => 'movie_id'
        ]);
        $this->belongsToMany('Casts', [
            'foreignKey' => 'movie_id',
            'targetForeignKey' => 'cast_id',
            'joinTable' => 'movies_casts'
        ]);
        $this->belongsToMany('Genres', [
            'foreignKey' => 'movie_id',
            'targetForeignKey' => 'genre_id',
            'joinTable' => 'movies_genres'
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

        return $validator;
    }
}
