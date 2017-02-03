<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="SummonerInfo")
 * )
 */
class SummonerInfo
{
    /**
     * @SWG\Property()
     * @var \DateTime
     */
    public $last_info_update;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $id;
    /**
     * @SWG\Property()
     * @var string
     */
    public $name;
    /**
     * @SWG\Property()
     * @var string
     */
    public $shortName;
    /**
     * @SWG\Property()
     * @var string
     */
    public $server;
    /**
     * @SWG\Property()
     * @var integer
     */
    public $icon;
    /**
     * @SWG\Property(default="Unranked")
     * @var string
     */
    public $tier;
    /**
     * @SWG\Property()
     * @var string
     */
    public $division;
}
