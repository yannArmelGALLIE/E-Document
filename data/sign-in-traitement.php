<?php 
include("db.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $numCni = $_POST["num-cni"];
    $password = $_POST["password"];
    if($email != "" && $password != ""){
        $req = $bdd -> query("SELECT * FROM users WHERE numCni = '$numCni' and password = '$password'");
        $rep = $req -> fetch();
        if($rep) {
            echo "vous êtes connecté";
        } else {
            $error_msg = "incorrect";
        }
    }
}
?>