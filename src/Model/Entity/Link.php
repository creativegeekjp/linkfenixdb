<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Link Entity.
 *
 * @property int $id
 * @property int $movie_id
 * @property \App\Model\Entity\Movie $movie
 * @property int $tvshow_id
 * @property \App\Model\Entity\Tvshow $tvshow
 * @property int $episode_id
 * @property \App\Model\Entity\Episode $episode
 * @property string $link
 * @property string $source
 * @property string $vote
 * @property string $video_quality
 * @property string $audio
 * @property \Cake\I18n\Time $created
 */
class Link extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
