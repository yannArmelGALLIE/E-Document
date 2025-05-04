<?php 
@include ("db.php");

if(isset($_POST["submit"])){
    $surname = $_POST["surname"];
    $firstName = $_POST["firstname"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $numCni = $_POST["num-cni"];
    $numNni = $_POST["num-nni"];
    $password = $_POST["password"];


    $req = $bdd -> prepare("INSERT INTO users VALUES (0, :surname, :firstName, :number, :email, :numCni, :numNni, :password)");
    $req -> execute(
        array(
            "surname" => $surname,
            "firstName" => $firstName,
            "number" => $number,
            "email" => $email,
            "numCni" => $numCni,
            "numNni" => $numNni,
            "password" => $password,
        )
    );
    header("Location: ../sign-in.php");
    exit();
}
?>