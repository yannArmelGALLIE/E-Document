<?php 
session_start();
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $numCni = $_POST["num-cni"];
    $password = $_POST["password"];
    if($numCni != "" && $password != ""){
        $req = $bdd -> query("SELECT * FROM users WHERE numCni = '$numCni' and password = '$password'");
        $rep = $req -> fetch();
        if($rep) {
            $_SESSION["user"] = $numCni;
            $_SESSION["password"] = $password;
            header("Location: ../index.php");
            exit();
        } else {
            $error_msg = "incorrect";
        }
    }
}
?>