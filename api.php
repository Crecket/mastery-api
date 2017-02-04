<?php

namespace MP\Api;

// polyfill
$match = function () {
};

/**
 * @SWG\Get(
 *   path="/static/servers",
 *   tags={"static"},
 *   summary="Server list",
 *   description="Object with all servers currently active",
 *   operationId="getServerList",
 *   produces={"application/json"},
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/Server")
 *     ),
 *   ),
 * )
 */
$match('/static/servers');

/**
 * @SWG\Get(
 *   path="/static/champions",
 *   tags={"static"},
 *   summary="Champions list",
 *   description="Object with all champions currently active",
 *   operationId="getChampionList",
 *   produces={"application/json"},
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/Champion")
 *     ),
 *   ),
 *   @SWG\Response(
 *     response=400,
 *     description="Invalid server"
 *   )
 * )
 */
$match('/static/champions');

/**
 * @SWG\Get(path="/highscores/champion/{championId}/{offset}/{limit}/{server}",
 *   tags={"highscores"},
 *   summary="Champion points",
 *   description="Returns a list of the champions with the highest masterypoints",
 *   operationId="highscoresChampion",
 *   produces={"application/json"},
 *   @SWG\Parameter(
 *     name="championId",
 *     default="0",
 *     in="path",
 *     description="ID of champion to get highscores for",
 *     required=false,
 *     type="integer",
 *     format="int64"
 *   ),
 *   @SWG\Parameter(
 *     name="offset",
 *     default="0",
 *     in="path",
 *     description="Offset amount for the highscores",
 *     required=false,
 *     type="integer",
 *     format="int64",
 *     minimum=0,
 *     maximum=250000,
 *   ),
 *   @SWG\Parameter(
 *     name="limit",
 *     default=20,
 *     in="path",
 *     description="Limit amount of rows to return",
 *     required=false,
 *     type="integer",
 *     format="int64",
 *     minimum=5,
 *     maximum=250,
 *   ),
 *   @SWG\Parameter(
 *     name="server",
 *     default="any",
 *     in="path",
 *     description="Server to filter by",
 *     required=false,
 *     type="string"
 *   ),
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/ChampionHighscore")
 *     ),
 *   ),
 *   @SWG\Response(response=400,  description="Invalid offset or limit"),
 *   @SWG\Response(response=404,  description="Champion or server not found")
 * )
 */
$match('/highscores/champion/{champion}/{offset}/{limit}/{server}');

/**
 * @SWG\Get(path="/highscores/total/{offset}/{limit}/{server}",
 *   tags={"highscores"},
 *   summary="Summoner total points",
 *   description="Returns a list of the champions with the highest masterypoints",
 *   operationId="highscoresTotal",
 *   produces={"application/json"},
 *   @SWG\Parameter(
 *     name="offset",
 *     default="0",
 *     in="path",
 *     description="Offset amount for the highscores",
 *     required=false,
 *     type="integer",
 *     format="int64",
 *     minimum=0,
 *     maximum=250000,
 *   ),
 *   @SWG\Parameter(
 *     name="limit",
 *     default=20,
 *     in="path",
 *     description="Limit amount of rows to return",
 *     required=false,
 *     type="integer",
 *     format="int64",
 *     minimum=5,
 *     maximum=250,
 *   ),
 *   @SWG\Parameter(
 *     name="server",
 *     default="any",
 *     in="path",
 *     description="Server to filter by",
 *     required=false,
 *     type="string"
 *   ),
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/TotalHighscore")
 *     ),
 *   ),
 *   @SWG\Response(response=400,  description="Invalid offset or limit"),
 *   @SWG\Response(response=404,  description="Champion or server not found")
 * )
 */
$match('/highscores/total/{offset}/{limit}/{server}');

/**
 * @SWG\Get(path="/summoner/{summoner}/{server}",
 *   tags={"summoner"},
 *   summary="Profile by summoner Name",
 *   description="A single summoner profile with summoner info, mastery info and ingame data",
 *   operationId="summonerProfile",
 *   produces={"application/json"},
 *   @SWG\Parameter(
 *     name="summoner",
 *     in="path",
 *     description="Summoner name",
 *     required=false,
 *     type="string"
 *   ),
 *   @SWG\Parameter(
 *     name="server",
 *     in="path",
 *     description="Server to filter by",
 *     required=false,
 *     type="string"
 *   ),
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(ref="#/definitions/SummonerProfile")
 *   ),
 *   @SWG\Response(
 *     response=400,
 *     description="Invalid server"
 *   )
 * )
 */
$match('/summoner/{summoner}/{server}');

/**
 * @SWG\Get(path="/summoner/{summoner_id}/{server}",
 *   tags={"summoner"},
 *   summary="Profile by summoner ID",
 *   description="A single summoner profile with summoner info, mastery info and ingame data using the summoner ID",
 *   operationId="summonerProfileId",
 *   produces={"application/json"},
 *   @SWG\Parameter(
 *     name="summoner_id",
 *     in="path",
 *     description="Summoner ID",
 *     required=false,
 *     format="int64",
 *     type="integer"
 *   ),
 *   @SWG\Parameter(
 *     name="server",
 *     in="path",
 *     description="Server to filter by",
 *     required=false,
 *     type="string"
 *   ),
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(ref="#/definitions/SummonerProfile")
 *   ),
 *   @SWG\Response(
 *     response=400,
 *     description="Invalid server"
 *   )
 * )
 */
$match('/summoner_id/{summoner_id}/{server}');

// undocumented intentionally - unreliable and shouldn't be used
$match('/static/images/summoner/{id}');

$match('/static/images/ranked/{tier}/{division}');
