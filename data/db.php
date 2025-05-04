<?php 
$servername = "localhost";
$dbname = "e-document";
$username = "root";
$password = "";

try{
    $bdd = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>