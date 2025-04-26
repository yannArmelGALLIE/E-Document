<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="../script/burger-menu.js" defer></script>
    <script src="../script/scroll-bar.js" defer></script>
    <script src="../script/active-link.js" defer></script>
    <title>Accueil | E-Document</title>
</head>

<body>
    <!-- Header -->
    <section class="section-header">
        <header>
            <div class="menu">
                <div class="logo">
                    <img src="../assets/img/logo.png" alt="Logo de E-Document">
                </div>
                <ul class="links">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="status.php">Status</a></li>
                    <li><a href="about.php">A propos</a></li>
                    <li><a href="service.php">Contact</a></li>
                </ul>
                <div class="button">
                    <a href="sign-in.php">Se connecter</a>
                </div>
                <div class="burger-menu-button">
                    <span class="material-symbols-outlined">menu</span>
                </div>
            </div>
            <div class="burger-menu">
                <ul class="links">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="status.php">Status</a></li>
                    <li><a href="about.php">A propos</a></li>
                    <li><a href="service.php">Contact</a></li>
                </ul>
                <div class="divider"></div>
                <div class="button">
                    <a href="sign-in.php">Se connecter</a>
                </div>
            </div>
        </header>
        <div class="progress">
            <div class="progress-bar" id="scroll-bar"></div>
         </div>
    </section>
</body>

</html>


