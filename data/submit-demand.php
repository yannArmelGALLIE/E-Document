<?php 
session_start();

@include("db.php");

if(isset($_POST["submit"])){
   if($_SESSION["user"] == "" || $_SESSION["password"] == ""){
      header("Location: ../sign-in.php");
   } else{
      $numCni = $_SESSION["user"];
      $password = $_SESSION["password"];
      $req = $bdd -> query("SELECT * FROM users WHERE numCni = '$numCni' and password = '$password'");
      $rep = $req -> fetch();
      if($rep) {
         $checkboxes = $_POST["checkboxes"];
         $demand = implode(", ", $checkboxes);
         // foreach($checkboxes as $checkbox) {
         //  echo $checkbox . "<br>";
         // } 
         echo $rep["surname"];
         $req = $bdd -> prepare("INSERT INTO request VALUES (0, :id_user, :numCni, :email, :password, :demand)");
         $req -> execute(
             array(
                 "id_user" => $rep["id"],
                 "numCni" => $rep["numCni"],
                 "email" => $rep["email"],
                 "password" => $rep["password"],
                 "demand" => $demand,
             )
         );
      } else {
         echo "erreur";
      }
   }
}
?>
