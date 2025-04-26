<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="script/burger-menu.js" defer></script>
    <script src="script/scroll-bar.js" defer></script>
    <script src="script/active-link.js" defer></script>
    <title>Se connecter | E-Document</title>
</head>

<body>
    <!-- Header -->
    <?php include("./screens/header.php"); ?>
    <!-- Body -->
    <section class="section-main">
        <main>
        <div class="title-area">
            <h1 class="title">Votre compte a été déconnecté. <br> Veuillez vous connecter pour continuer.</h1>
        </div>
        <div class="form-sign-in">
            <form action="./data/sign-in-traitement.php" method="POST">
                <div>
                <label for="">Numero de la CNI </label><br>
                <label for="" class="numCni">CI<input type="number" name="num-cni" id="" ></label>
                <label for="">Mot de passe</label><br>
                <input type="password" name="password"  id=""><br>
                </div>
                <input type="submit" name="submit" value="Se connecter"><br>
                <a href="">J'ai oublié mon mot de passe</a><br>
                <a href="sign-up.php">Créer un nouveau compte</a>
            </form>
        </div>
        </main>
     </section>
    <!-- Footer -->
    <?php include("./screens/footer.php"); ?>
</body>

</html>