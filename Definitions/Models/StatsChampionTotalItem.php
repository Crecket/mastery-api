<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="StatsChampionTotalItem")
 * )
 */
class StatsChampionTotalItem
{
    /**
     * @SWG\Property(format="int64", example=157)
     * @var integer
     */
    public $champoin;
    /**
     * @SWG\Property(format="int64", example=249029)
     * @var integer
     */
    public $points;
    /**
     * @SWG\Property(format="int64", example=249029)
     * @var integer
     */
    public $amount;
}