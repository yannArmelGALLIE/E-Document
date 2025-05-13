<?php 
session_start();
$error_msg = "";

if(isset($_GET["error"])) {
    $error_msg = "Numéro de CNI ou mot de passe incorrect";
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="assets/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="client/client_sign-in.js" defer></script>
    <title>Se connecter | E-Document</title>
</head>

<body>
    <!-- Body -->
    <section class="section-main">
        <main class="main-sign-in">
        <div class="title-area">
            <h1 class="title">Votre compte a été déconnecté. <br> Veuillez vous connecter pour continuer.</h1>
        </div>
        <div class="form-sign-in">
        <!-- ./data/sign-in-traitement.php -->
            <form action="./data/sign-in-traitement.php" method="POST" id="signInForm">
                <div>
                <label for="">
                    <span class="material-symbols-outlined">pin</span>
                    Numero de la CNI 
                </label><br>
                <input type="text" name="num-cni" id="num-cni" ><br>
                <label for="">
                    <span class="material-symbols-outlined">lock</span>
                    Mot de passe
                </label><br>
                <input type="password" name="password"  id="password"><br>
                </div>
                <input type="submit" name="submit" value="Se connecter" ><br>
                <div class="" id="error"></div>
                <?php if(!empty($error_msg)): ?>
                <div id="error" class="error-php"><?= htmlspecialchars($error_msg) ?></div>
                <?php endif; ?>
                <a href="">J'ai oublié mon mot de passe</a><br>
                <a href="sign-up.php">Créer un nouveau compte</a>
            </form>
        </div>
        </main>
     </section>
</body>

</html>