<?php
function getNames($input)
{
    $names = [];
    foreach ($input["players"] as $player) {
        array_push($names, $player["name"]);
    }
    return $names;
}

function getAges($input)
{
    $ages = [];
    foreach ($input["players"] as $player) {
        array_push($ages, $player["age"]);
    }
    return $ages;
}

function getCities($input)
{
    $cities = [];
    foreach ($input["players"] as $player) {
        array_push($cities, $player["address"]);
    }
    return $cities;
}

function getUniqueNames($input)
{
    return array_unique(getNames($input));
}

function getMaxAgesPersons($input)
{
    $maxValue = max(getAges($input));
    $maxAgesPersons = [];
    foreach ($input["players"] as $player) {
        if ($player["age"] == $maxValue) {
            array_push($maxAgesPersons, $player["name"]);
        }
    }
    return $maxAgesPersons;
}

$json = "{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},
{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},
{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},
{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},
{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},
{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";

$obj = json_decode($json, true);

print_r(getNames($obj));
print_r(getAges($obj));
print_r(getCities($obj));
print_r(getUniqueNames($obj));
print_r(getMaxAgesPersons($obj));
