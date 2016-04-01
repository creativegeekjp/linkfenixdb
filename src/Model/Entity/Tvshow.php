<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tvshow Entity.
 *
 * @property int $id
 * @property string $name
 * @property \Cake\I18n\Time $year
 * @property string $quality
 * @property string $linkage
 * @property string $IMDB
 * @property string $hostlink
 * @property string $country
 * @property string $duration
 * @property string $description
 * @property \Cake\I18n\Time $releasedate
 * @property string $director
 * @property string $languages
 * @property string $image
 * @property \Cake\I18n\Time $created
 * @property \App\Model\Entity\Season[] $seasons
 */
class Tvshow extends Entity
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
