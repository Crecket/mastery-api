<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerIngameParticipant")
 * )
 */
class SummonerIngameParticipant
{
    /**
     * @SWG\Property(example=100)
     * @var integer
     */
    public $teamId;
    /**
     * @SWG\Property(example=14)
     * @var integer
     */
    public $spell1Id;
    /**
     * @SWG\Property(example=4)
     * @var integer
     */
    public $spell2Id;
    /**
     * @SWG\Property(example=133)
     * @var integer
     */
    public $championId;
    /**
     * @SWG\Property(example=682)
     * @var integer
     */
    public $profileIconId;
    /**
     * @SWG\Property(example="Crecket")
     * @var string
     */
    public $summonerName;
    /**
     * @SWG\Property(example=false)
     * @var boolean
     */
    public $bot;
    /**
     * @SWG\Property(example=1234423)
     * @var integer
     */
    public $summonerId;
    /**
     * @SWG\Property()
     * @var SummonerIngameParticipantRune[]
     */
    public $runes;
    /**
     * @SWG\Property()
     * @var SummonerIngameParticipantMastery[]
     */
    public $masteries;
}
