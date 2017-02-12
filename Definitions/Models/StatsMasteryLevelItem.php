<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="StatsMasteryLevelItem")
 * )
 */
class StatsMasteryLevelItem
{
    /**
     * @SWG\Property(format="int64", example=7)
     * @var integer
     */
    public $mastery_level;
    /**
     * @SWG\Property(format="int64", example=34466)
     * @var integer
     */
    public $points;
    /**
     * @SWG\Property(format="int64", example=432297)
     * @var integer
     */
    public $amount;
}