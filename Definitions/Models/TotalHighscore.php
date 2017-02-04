<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="TotalHighscore")
 * )
 */
class TotalHighscore
{
    /**
     * @SWG\Property(format="int64")
     * @var integer
     */
    public $id;
    /**
     * @SWG\Property()
     * @var \Datetime
     */
    public $added;
    /**
     * @SWG\Property()
     * @var \Datetime
     */
    public $last_summoner_update;
    /**
     * @SWG\Property()
     * @var \Datetime
     */
    public $last_summoner_mastery_update;
    /**
     * @SWG\Property(example="Crecket")
     * @var string
     */
    public $name;
    /**
     * @SWG\Property(format="int32", example=1439)
     * @var integer
     */
    public $icon;
    /**
     * @SWG\Property(example="V")
     * @var string
     */
    public $ranked_division;
    /**
     * @SWG\Property(default="Unranked", example="BRONZE")
     * @var string
     */
    public $ranked_tier;
    /**
     * @SWG\Property(format="int32", example=119)
     * @var integer
     */
    public $total_champions;
    /**
     * @SWG\Property(format="int32", example=16)
     * @var integer
     */
    public $total_mastered;
    /**
     * @SWG\Property(format="int32", example=321)
     * @var integer
     */
    public $total_mastery_level;
    /**
     * @SWG\Property(format="int32", example=1266677)
     * @var integer
     */
    public $total_points;
}