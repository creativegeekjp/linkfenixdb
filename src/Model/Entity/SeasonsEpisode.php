<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * SeasonsEpisode Entity.
 *
 * @property int $id
 * @property int $episode_id
 * @property \App\Model\Entity\Episode $episode
 * @property int $season_id
 * @property \App\Model\Entity\Season $season
 */
class SeasonsEpisode extends Entity
{

}
