<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="StatsRankedTiers")
 * )
 */
class StatsRankedTiers
{
    /**
     * @SWG\Property(example="III")
     * @var string
     */
    public $ranked_division;
    /**
     * @SWG\Property(example="SILVER")
     * @var string
     */
    public $ranked_tier;
    /**
     * @SWG\Property(format="int64", example=99322)
     * @var integer
     */
    public $count;
    /**
     * @SWG\Property(format="int64", example=60042723934)
     * @var integer
     */
    public $total;
}