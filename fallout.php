<?php
function damage($special, $skills, $weapon){
	$damage = ceil($skills['Unarmed'] / 20 + 0.5);
	$luck = $special["Luck"] * $weapon["critical_chance_multiplier"];
	$damage += $weapon["damage"];
	if (rand(1, 100) <= $luck) {
		$damage += $weapon["critical_damage"];
	}
	return $damage;
}
$special = [
 'Strength' => 1,
 'Perception' => 1,
 'Endurance' => 1,
 'Charisma' => 1,
 'Inteligence' => 1,
 'Agility' => 1,
 'Luck' => 15
];
$skills = [
	'Unarmed' => 13
	];
$unarmed_weapon = [
	"brass_knuckles" => [
		"damage" => 6,
		"critical_damage" => 6,
		"critical_chance_multiplier" => 1,
		"action_point" => 18
	],
 	"steel_knuckles" => [
 		"damage" => 9,
 		"critical_damage" => 9,
		"critical_chance_multiplier" => 1,
 		"action_point" => 14
 	],
 	"spiked_knuckles" => [
 		"damage" => 9,
 		"critical_damage" => 9,
		"critical_chance_multiplier" => 1,
 		"action_point" => 19
 	],
 	"plunkett" => [
 		"damage" => 12,
 		"critical_damage" => 12,
		"critical_chance_multiplier" => 2,
 		"action_point" => 15
 	]
];
echo damage($special, $skills, $unarmed_weapon["brass_knuckles"]) . PHP_EOL;