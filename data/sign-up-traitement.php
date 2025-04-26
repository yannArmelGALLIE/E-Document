<?php 
@include ("db.php");

if(isset($_POST["submit"])){
    $surname = $_POST["surname"];
    $firstName = $_POST["firstname"];
    $email = $_POST["email"];
    $numCni = $_POST["num-cni"];
    $numNni = $_POST["num-nni"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];


    $req = $bdd -> prepare("INSERT INTO users VALUES (0, :surname, :firstName, :email, :numCni, :numNni, :password)");
    $req -> execute(
        array(
            "surname" => $surname,
            "firstName" => $firstName,
            "email" => $email,
            "numCni" => $numCni,
            "numNni" => $numNni,
            "password" => $password
        )
    );
    echo "inscription reussi";
}
?>