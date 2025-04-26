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
    <title>S'inscrire | E-Document</title>
</head>

<body>
    <!-- Header -->
    <?php include("./screens/header.php"); ?>
    <!-- Body -->
    <section class="section-main">
        <main>
        <div class="title-area">
            <h1 class="title">Veuillez creer un compte pour continuer.</h1>
        </div>
        <div class="form-sign-in">
            <form action="./data/sign-up-traitement.php" method="POST">
                <div>
                <label for="">Nom</label><br>
                <input type="text" name="surname" id="surname" required>
                <label for="">Prenoms</label><br>
                <input type="text" name="firstname" id="firstname" required>
                <label for="">Numero de téléphone</label><br>
                <input type="number" name="firstname" id="name" required>
                <label for="">Email</label>
                <input type="email" name="email" id="email" required>
                <label for="">Numero de la CNI </label><br>
                <label for="" class="numCni">CI<input type="number" name="num-cni" id="" required ></label>
                <label for="">Numero NNI</label><br>
                <input type="number" name="num-nni" id="num-nni"  required>
                <label for="">Mot de passe</label><br>
                <input type="password" name="password"  id="" required><br>
                <label for="">Confirmation du mot de passe</label><br>
                <input type="password" name="confirm-password"  id="confirm-password" required><br>
                </div>
                <input type="submit" name="submit" value="Se connecter"><br>
                <a href="sign-in.php">J'ai déjà un compte</a>
            </form>
        </div>
        </main>
     </section>
    <!-- Footer -->
    <?php include("./screens/footer.php"); ?>
</body>

</html>