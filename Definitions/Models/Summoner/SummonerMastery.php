<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerMasteryData")
 * )
 */
class SummonerMastery
{
    /**
     * @SWG\Property()
     * @var \Datetime
     */
    public $last_mastery_update;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $total_champions;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $total_mastered;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $total_mastery_level;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $total_points;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $total_points_rank;
    /**
     * @SWG\Property()
     * @var SummonerMasteryItem[]
     */
    public $mastery_data;
}
