<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerIngameParticipantMastery")
 * )
 */
class SummonerIngameParticipantMastery
{
    /**
     * @SWG\Property(example=5)
     * @var integer
     */
    public $rank;
    /**
     * @SWG\Property(example=6111)
     * @var integer
     */
    public $masteryId;
}
