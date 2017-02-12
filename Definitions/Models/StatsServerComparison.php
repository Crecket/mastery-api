<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="StatsServerComparison")
 * )
 */
class StatsServerComparison
{
    /**
     * @SWG\Property(format="int64", example="euw")
     * @var integer
     */
    public $server;
    /**
     * @SWG\Property(format="int64", example=124882)
     * @var integer
     */
    public $count;
    /**
     * @SWG\Property(format="int64", example=101583629083)
     * @var integer
     */
    public $total;
    /**
     * @SWG\Property(format="int64", example=23236607)
     * @var integer
     */
    public $total_mastery;
}