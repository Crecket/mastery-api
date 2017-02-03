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
     * @var int
     */
    public $summoner;
    /**
     * @SWG\Property(format="int64")
     * @var int
     */
    public $mastery_level;
    /**
     * @SWG\Property(format="int64")
     * @var int
     */
    public $mastery_level_estimate;
    /**
     * @SWG\Property(format="int64")
     * @var int
     */
    public $tokens;
    /**
     * @SWG\Property(format="int64")
     * @var int
     */
    public $champion;
    /**
     * @SWG\Property(format="int32")
     * @var int
     */
    public $points;
    /**
     * @SWG\Property(format="int32")
     * @var int
     */
    public $id;
    /**
     * @SWG\Property()
     * @var \DateTime
     */
    public $added;
    /**
     * @SWG\Property()
     * @var \DateTime
     */
    public $last_summoner_update;
    /**
     * @SWG\Property()
     * @var \DateTime
     */
    public $last_summoner_mastery_update;
    /**
     * @SWG\Property()
     * @var string
     */
    public $name;
    /**
     * @SWG\Property()
     * @var string
     */
    public $server;
    /**
     * @SWG\Property()
     * @var int
     */
    public $icon;
    /**
     * @SWG\Property(default="")
     * @var string
     */
    public $ranked_division;
    /**
     * @SWG\Property(default="Unranked")
     * @var string
     */
    public $ranked_tier;
    /**
     * @SWG\Property(default=0)
     * @var int
     */
    public $total_champions;
    /**
     * @SWG\Property(default=0)
     * @var int
     */
    public $total_mastered;
    /**
     * @SWG\Property(default=0)
     * @var int
     */
    public $total_mastery_level;
    /**
     * @SWG\Property(default=0)
     * @var int
     */
    public $total_points;
    /**
     * @SWG\Property(default=0)
     * @var int
     */
    public $total_achievement_points;
}