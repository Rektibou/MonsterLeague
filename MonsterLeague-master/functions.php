<?php
require __DIR__ . '/monster.php';


function getMonstersObject()
{
    $monsters = getMonsters();
    $monstersArray = array();
    foreach ($monsters as $monster) {
        $monstersArray[] = new Monster($monster['name'],$monster['strength'],$monster['life'],$monster['type']);
    }
    return $monstersArray;
}


function getMonsters()
{
    return [
        [
            'name' => 'Domovoï',
            'strength' => 30,
            'life' => 300,
            'type' => 'water'
        ],
        [
            'name' => 'Wendigos',
            'strength' => 100,
            'life' => 450,
            'type' => 'earth'
        ],
        [
            'name' => 'Thunderbird',
            'strength' => 400,
            'life' => 500,
            'type' => 'air'
        ],
        [
            'name' => 'Sirrush',
            'strength' => 250,
            'life' => 1500,
            'type' => 'fire'
        ],
        [
            'name' => 'Flanders',
            'strength' => 100,
            'life' => 500,
            'type' => 'ChaoticNeutral'
        ],
        [
            'name' => 'Homer',
            'strength' => 50,
            'life' => 1000,
            'type' => 'TrueNeutral'
        ],
    ];
}

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}