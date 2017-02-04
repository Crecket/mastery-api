<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerMasteryItem")
 * )
 */
class SummonerMasteryItem
{
    /**
     * @SWG\Property(example=7)
     * @var integer
     */
    public $mastery_level;
    /**
     * @SWG\Property(example=1)
     * @var integer
     */
    public $champion;
    /**
     * @SWG\Property(example=50000)
     * @var integer
     */
    public $points;
    /**
     * @SWG\Property(example=11)
     * @var integer
     */
    public $mastery_level_estimate;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $tokens;
}