<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerIngameBannedChampion")
 * )
 */
class SummonerIngameBannedChampion
{
    /**
     * @SWG\Property(example=7)
     * @var integer
     */
    public $championId;
    /**
     * @SWG\Property(example=100)
     * @var integer
     */
    public $teamId;
    /**
     * @SWG\Property(example=1)
     * @var integer
     */
    public $pickTurn;
}
