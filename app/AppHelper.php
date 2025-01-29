<?php

use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Services\ApiFootballService;
use App\Models\PlayerStatistic;
use Carbon\CarbonTimeZone;


function LeagueTeamPlayerValidation($team_id, $player_id, $player_role, $leagueId, $player_name)
{
    $myTeam = Session::get('myTeam', []);

    // Check if player is already in the team
    foreach ($myTeam as $player) {
        if ($player['player_name'] === $player_name) {
            return ['success' => false, 'message' => 'Player already in the team.'];
        }
    }

    if(count($myTeam) > 10){
        return ['success' => false, 'message' => 'You can add only 11 players.'];
    }

    return ['success' => true, 'message' => 'Player added successfully'];
}

function getMatchStatus($date)
{
    $startTime = Carbon::now();  // Keep this as a Carbon object
    $endTime = Carbon::parse($date);  //$date is utc timezone
    $minutesDifference = $startTime->diffInMinutes($endTime);
    return $minutesDifference; // Outputs the difference in minutes
}

// function checkMatch($leagueId)
//  {
//     $res = false;
//     $apiFootballService = app(ApiFootballService::class);
//     $matches =$apiFootballService->get('/fixtures', [
//         'league' => $leagueId,
//         'from' => Carbon::now()->format('Y-m-d'),
//         'to' => Carbon::now()->addYear(100)->format('Y-m-d'),
//         'season' =>  Carbon::now()->format('Y')
//     ]);

//     if(!empty($matches['response']))
//     {
//         $res = true;
//     }
//     return $res;
//  }
?>
