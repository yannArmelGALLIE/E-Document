<?php 
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="assets/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="script/burger-menu.js" defer></script>
    <script src="script/scroll-bar.js" defer></script>
    <script src="script/active-link.js" defer></script>
    <title>Utilisateur | E-Document</title>
</head>

<body>
    <!-- Header -->
    <?php include("./screens/header.php"); ?>
    <!-- Body -->
     
    <!-- Footer -->
    <?php include("./screens/footer.php"); ?>
</body>

</html>