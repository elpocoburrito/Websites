<html>
<body>
<?php
include('api/php-riot-api.php');
include('api/FileSystemCache.php');

$api = new riotapi('na1');
$api_cache = new riotapi('na1', new FileSystemCache('api/cache/'));

$api_username = 'PedoSinJewPowerz';

$user_azraellix = $api->getSummonerByName('Azraellix');
$user_pedo = $api->getSummonerByName('PedoSinJewPowerz');



//$test0 = $api->getSummonerByName($api_username);
//$test1 = $api->getSummonerByName($api_username);
//$test2 = $api->getChampionMastery(80099972);
//s$test3 = $api->getCurrentGame($user_azraellix['id']);

//getCurrentGameParticipants(null);




/*
$summonerID = $api->getSummonerByName('frostblaze')['id'];
$gamearray = $api->getCurrentGame($summonerID);
//preview($gamearray);
//preview($gamearray);
for ($x = 0; $x < count($gamearray['participants']); $x++) {
    $playernb = $x + 1;
    echo "The name of the player " . $playernb . " is: " . $gamearray['participants'][$x]['summonerName'] . " <br>";
}
*/


getCurrentGameParticipants('frostblaze');

function getCurrentGameParticipants($summonerName){
  global $api;
  //global preview;
  $summonerID = $api->getSummonerByName($summonerName)['id'];
  $gamearray = $api->getCurrentGame($summonerID);
  $summonerLeague = $api->getLeague($summonerID);
  for ($x = 0; $x < count($gamearray['participants']); $x++) {
      $playernb = $x + 1;
      echo "The name of the player " . $playernb . " is: " . $gamearray['participants'][$x]['summonerName'] . " <br>";
    }
  preview($summonerLeague);
}

function preview($tabs){
  echo "<pre>";
  echo print_r($tabs);
  echo "</pre>";
}

 ?>
</body>
</html>
