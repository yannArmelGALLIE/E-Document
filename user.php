<?php 
session_start();
include("./data/db.php");

// On filtre les requests par le numéro CNI
if(isset($_SESSION["user"]) || isset($_SESSION["password"])) {
$numCni = $_SESSION["user"];

$stmt = $bdd->prepare("SELECT * FROM users WHERE numCni = :numCni");
$stmt->execute(["numCni" => $numCni]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: sign-in.php");
}

if(isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location: sign-in.php");
}

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
     <section class="section-main">
        <main class="main-user">
                <div class="title-area">
                    <h1 class="title">Informations personnelles</h1>
                </div>
                <div class="info-user">   
                    <div class="div-info div1">
                        <p class="p-info">Nom<span class="span-info"><?= htmlspecialchars($user["surname"]) ?></span></p>
                        <p class="p-info">Prénoms<span class="span-info"><?= htmlspecialchars($user["firstName"]) ?></span></p>
                        <p class="p-info">Numéro de téléphone<span class="span-info"><?= htmlspecialchars($user["number"]) ?></span></p>
                    </div>
                    <div class="div-info div2">
                        <p class="p-info">Email<span class="span-info"><?= htmlspecialchars($user["email"]) ?></span></p>
                        <p class="p-info">Numéro de la CNI<span class="span-info"><?= htmlspecialchars($user["numCni"]) ?></span></p>
                        <p class="p-info">Numéro de la NNI<span class="span-info"><?= htmlspecialchars($user["numNni"]) ?></span></p> 
                    </div>
                </div>
                <div class="links-user">
                    <a href="" class="forgotPassword">Vous voulez changer de mot de passe</a>
                    <a href="?logout=true" class="disconnect">Déconnexion</a>
                </div>
        </main>
     </section>
    <!-- Footer -->
    <?php include("./screens/footer.php"); ?>
</body>

</html>