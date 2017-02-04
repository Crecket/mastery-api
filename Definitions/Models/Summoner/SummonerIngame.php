<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerInfo")
 * )
 */
class SummonerIngame
{
    /**
     * @SWG\Property(example="Normal 5v5 Blind Pick")
     * @var string
     */
    public $gameTitle;
    /**
     * @SWG\Property(example=3044677952)
     * @var integer
     */
    public $gameId;
    /**
     * @SWG\Property(example=11)
     * @var integer
     */
    public $mapId;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $gameStartTime;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $gameLength;
    /**
     * @SWG\Property()
     * @var SummonerIngameBannedChampion[]
     */
    public $bannedChampions;
    /**
     * @SWG\Property()
     * @var SummonerIngameParticipant[]
     */
    public $participants;
}
