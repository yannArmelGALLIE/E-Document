<?php
include("../../data/db.php");


$jsonData = file_get_contents("../packages/requests.json");
$requests = json_decode($jsonData, true);
$stmt = $bdd->prepare("INSERT INTO requests (
        id_user, numCni, email, password, demand, requestDate,
        requestTime, receptionDate, receptionTime, status, filePath
    ) VALUES (
        :id_user, :numCni, :email, :password, :demand, :requestDate,
        :requestTime, :receptionDate, :receptionTime, :status, :filePath
    )
");
foreach ($requests as $req) {
    $stmt->execute([
        "id_user" => $req["id_user"],
        "numCni" => $req["numCni"],
        "email" => $req["email"],
        "password" => $req["password"], 
        "demand" => $req["demand"],
        "requestDate" => $req["requestDate"],
        "requestTime" => $req["requestTime"],
        "receptionDate" => $req["receptionDate"] ?? null,
        "receptionTime" => $req["receptionTime"] ?? null,
        "status" => $req["status"],
        "filePath" => $req["filePath"] ?? null
    ]);
}

echo "Importation des requêtes terminée.";
?>

