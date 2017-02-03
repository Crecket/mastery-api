<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerProfile")
 * )
 */
class SummonerProfile
{
    /**
     * @SWG\Property()
     * @var SummonerInfo
     */
    public $summoner_info;
    /**
     * @SWG\Property()
     * @var SummonerMastery
     */
    public $summoner_mastery;
    /**
     * @SWG\Property()
     * @var SummonerIngame
     */
    public $summoner_ingame;
}
