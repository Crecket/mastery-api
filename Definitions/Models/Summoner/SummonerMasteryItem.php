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
     * @SWG\Property(example="slug")
     * @var string
     */
    public $slug;
    /**
     * @SWG\Property(example="key")
     * @var string
     */
    public $key;
}