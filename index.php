<?php

//phpinfo();

// Partite di calendario
$games = [
    [
        "hostTeam" => "Colorado Moles",
        "guestTeam" => "Texas Bulls",
        "hostPoints"  => 53,
        "guestPoints"  => 38,
    ],
    [
        "hostTeam" => "Coyote Kansas",
        "guestTeam" => "Fireflies Chicago",
        "hostPoints"  => 29,
        "guestPoints"  => 47,
    ],
        [
        "hostTeam" => "Alabama Kangaroo",
        "guestTeam" => "San Francisco Animals",
        "hostPoints"  => 18,
        "guestPoints"  => 44,
    ],
];

// Stampa il calendario
for ($i = 0; $i < count($games); $i++) {
    $game = $games[$i];
    $match = $game["hostTeam"] . " - " . $game["guestTeam"] . " | " . $game["hostPoints"] . "-" . $game["guestPoints"];
    echo $match . " | ";
}