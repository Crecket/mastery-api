<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="Champion")
 * )
 */
class Champion
{
    /**
     * @SWG\Property(example="1", format="int64")
     * @var int
     */
    public $id;
    /**
     * @SWG\Property(example="Annie")
     * @var string
     */
    public $name;
    /**
     * @SWG\Property(example="annie")
     * @var string
     */
    public $pretty_name;
    /**
     * @SWG\Property(example="the Dark Child")
     * @var string
     */
    public $title;
    /**
     * @SWG\Property(example="Annie")
     * @var string
     */
    public $champkey;
    /**
     * @SWG\Property(example="/assets/img/lol/champion_icons/Annie.png")
     * @var string
     */
    public $img;
}