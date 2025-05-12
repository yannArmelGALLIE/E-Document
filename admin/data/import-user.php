<?php
include("../../data/db.php");

$jsonData = file_get_contents("../packages/user.json");
$users = json_decode($jsonData, true);

$stmt = $bdd->prepare("INSERT INTO users (surname, firstName, number, email, numCni, numNni, password) 
                       VALUES (:surname, :firstName, :number, :email, :numCni, :numNni, :password)");

foreach ($users as $user) {
    $stmt->execute([
        "surname" => $user["surname"],
        "firstName" => $user["firstName"],
        "number" => $user["number"],
        "email" => $user["email"],
        "numCni" => $user["numCni"],
        "numNni" => $user["numNni"],
        "password" => $user["password"], // Bonnes pratiques
    ]);
}

echo "Import terminé.";
?>
