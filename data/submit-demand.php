<?php 
if(isset($_POST["submit"])){
   $checkboxes = $_POST["checkboxes"];
   foreach($checkboxes as $checkbox) {
    echo $checkbox . "<br>";
   }
}
?>