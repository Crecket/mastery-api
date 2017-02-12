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
 *   )
 * )
 */
$match('/summoner_id/{summoner_id}/{server}');

/**
 * @SWG\Get(path="/stats/champion_totals",
 *   tags={"Stats"},
 *   summary="Champions",
 *   description="Returns the total statistics for all champions",
 *   operationId="statsChampionTotals",
 *   produces={"application/json"},
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/StatsChampionTotalItem")
 *     )
 *   )
 * )
 */
$match('/stats/champion_totals');

/**
 * @SWG\Get(path="/stats/mastery_level_amounts",
 *   tags={"Stats"},
 *   summary="Mastery levels",
 *   description="Returns the total statistics for levels 1 t/m 7",
 *   operationId="statsLevelAmounts",
 *   produces={"application/json"},
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/StatsMasteryLevelItem")
 *     )
 *   )
 * )
 */
$match('/stats/mastery_level_amounts');

/**
 * @SWG\Get(path="/stats/ranked_tiers",
 *   tags={"Stats"},
 *   summary="Ranked tiers",
 *   description="Returns the total statistics for all champions",
 *   operationId="statsRankedTiers",
 *   produces={"application/json"},
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/StatsRankedTiers")
 *     )
 *   )
 * )
 */
$match('/stats/ranked_tiers');

/**
 * @SWG\Get(path="/stats/server_comparison",
 *   tags={"Stats"},
 *   summary="Server statistics",
 *   description="A list with statistics for each server",
 *   operationId="statsServerComparison",
 *   produces={"application/json"},
 *   @SWG\Response(
 *     response=200,
 *     description="successful operation",
 *     @SWG\Schema(
 *       type="array",
 *       @SWG\Items(ref="#/definitions/StatsServerComparison")
 *     )
 *   )
 * )
 */
$match('/stats/server_comparison');

// undocumented intentionally - unreliable and shouldn't be used
$match('/static/images/summoner/{id}');

$match('/static/images/ranked/{tier}/{division}');
