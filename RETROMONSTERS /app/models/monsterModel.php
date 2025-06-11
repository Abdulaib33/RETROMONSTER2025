<?php 








// "SELECT monsters.name AS name, monsters.rarity AS rarity, monsters.pv AS pv, monsters.attack AS attack, monsters.image_url AS image_url, monsters.description AS description, monster_types.name AS monster_type, rareties.name AS rareties
// FROM ((monsters
// JOIN monster_types ON monsters.type_id = monster_types.id)
// JOIN rareties ON monsters.rarety_id = rareties.id)";



namespace App\Models\MonstersModel;

use \PDO;

function findAll($connexion) {
    
    $sql = "
        SELECT monsters.name AS name, monsters.rarity AS rarity, monsters.pv AS pv, monsters.attack AS attack, monsters.image_url AS image_url, monsters.description AS description, monster_types.name AS monster_type, rareties.name AS rareties
        FROM ((monsters
        JOIN monster_types ON monsters.type_id = monster_types.id)
        JOIN rareties ON monsters.rarety_id = rareties.id)
    ";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}

function randomOne($connexion) {

    $sql = "
        SELECT monsters.name AS name, monsters.rarity AS rarity, monsters.pv AS pv, monsters.attack AS attack, monsters.image_url AS image_url, monsters.description AS description, monster_types.name AS monster_type, rareties.name AS rareties
        FROM ((monsters
        JOIN monster_types ON monsters.type_id = monster_types.id)
        JOIN rareties ON monsters.rarety_id = rareties.id)
        ORDER BY RAND()
        LIMIT 1
    ";

    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);

}