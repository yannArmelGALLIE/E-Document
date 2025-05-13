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
         $date = date("Y-m-d");
         $time = date("H:i:s");
         $req = $bdd -> prepare("INSERT INTO request VALUES (0, :id_user, :numCni, :email, :password, :demand, 
               :requestDate, :requestTime, :receptionDate, :receptionTime, :status, :filePath)");
         $req -> execute(
             array(
                 "id_user" => $rep["id"],
                 "numCni" => $rep["numCni"],
                 "email" => $rep["email"],
                 "password" => $rep["password"],
                 "demand" => $demand,
                 "requestDate" => $date,
                 "requestTime" => $time,
                 "receptionDate" => null,
                 "receptionTime" => null,
                 "status" => "En cours d'envoi",
                 "filePath" => null
             )
         );
      header("Location: ../status.php");
      } else {
         echo "erreur";
      }
   }
}
?>
