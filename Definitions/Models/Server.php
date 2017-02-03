<?php

namespace MP\API;

/**
 * @SWG\Definition(
 *     type="object",
 *     @SWG\Xml(name="Server")
 * )
 */
class Server
{
    /**
     * Server slug
     * @SWG\Property(example="euw")
     * @var string
     */
    public $slug;
    /**
     * Server key
     * @SWG\Property(example="EUW1")
     * @var string
     */
    public $key;
}