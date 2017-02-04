<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerIngameParticipantRune")
 * )
 */
class SummonerIngameParticipantRune
{
    /**
     * @SWG\Property(example=9)
     * @var integer
     */
    public $count;
    /**
     * @SWG\Property(example=5245)
     * @var integer
     */
    public $runeId;
}
