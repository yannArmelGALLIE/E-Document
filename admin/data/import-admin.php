<?php
include("../../data/db.php");

$jsonData = file_get_contents("../packages/admin.json");
$admins = json_decode($jsonData, true);

$stmt = $bdd->prepare("INSERT INTO admin (surname, firstName, email, registrationNumber, numPhone, password, status) 
                       VALUES (:surname, :firstName, :email, :registrationNumber, :numPhone, :password, :status)");

foreach ($admins as $admin) {
    $stmt->execute([
        "surname" => $admin["surname"],
        "firstName" => $admin["firstName"],
        "email" => $admin["email"],
        "registrationNumber" => $admin["registrationNumber"],
        "numPhone" => $admin["numPhone"],
        "password" => $admin["password"], // Bonnes pratiques
        "status" => $admin["status"]
    ]);
}

echo "Import terminé.";
?>
