<?php 
session_start();
include("../../data/db.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $registrationNumber = $_POST["registrationNumber"];
    $password = $_POST["password"];
    if($registrationNumber != "" && $password != ""){
        $req = $bdd -> query("SELECT * FROM admin WHERE registrationNumber = '$registrationNumber' and password = '$password'");
        $rep = $req -> fetch();
        if($rep) {
            $_SESSION["admin"] = $registrationNumber;
            $_SESSION["password"] = $password;
            $req = $bdd->prepare("UPDATE admin SET status = :status WHERE registrationNumber = :registrationNumber");
            $req->execute([
            "status" => "Connecté",
            "registrationNumber" => $registrationNumber
        ]);
            header("Location: ../request.php");
            exit();
        } else {
            $error_msg = "incorrect";
        }
    }
}
?>
