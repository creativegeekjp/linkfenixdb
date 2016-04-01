<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TvshowsSeason Entity.
 *
 * @property int $id
 * @property int $season_id
 * @property \App\Model\Entity\Season $season
 * @property int $tvshow_id
 * @property \App\Model\Entity\Tvshow $tvshow
 * @property \App\Model\Entity\Episode $episode
 */
class TvshowsSeason extends Entity
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
