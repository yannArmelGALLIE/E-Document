<?php session_start();?>
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
    <title>A propos | E-Document</title>
</head>

<body>
    <!-- Header -->
    <?php include("./screens/header.php"); ?>
    <!-- Body -->
     <section class="section-main">
        <main class="about-main">
            <div class="title-area">
            <h1 class="title">Ce qu'il faut savoir sur le site</h1>
            </div>
            <p>Bienvenue sur <strong>E-Document</strong>, la plateforme dédiée à simplifier vos démarches administratives en ligne. 
                Nous permettons aux citoyens de soumettre des demandes de documents administratifs, 
                de suivre leur statut en temps réel et de recevoir leurs documents directement sur la plateforme.
            </p>
            <h2 class="second-title">Notre Mission</h2>
            <p>Notre mission est de rendre les démarches administratives plus accessibles et transparentes pour tous. 
                Grâce à notre portail, vous pouvez suivre l'état de vos demandes et recevoir vos documents officiels en toute simplicité.
            </p>
            <h2 class="second-title">Fonctionnalités principales</h2>
            <ol>
                <li>Soumettez vos demandes de documents administratifs en quelques clics, directement via notre portail sécurisé.</li>
                <li>Suivez l'état de votre demande en temps réel grâce à notre système de suivi simple et transparent.</li>
                <li>Recevez vos documents directement sur la plateforme, prêts à être téléchargés ou imprimés, sans avoir à vous déplacer.</li>
            </ol>
            <h2 class="second-title">Valeurs et objectifs</h2>
            <ul>
                <li>Nous croyons que les démarches administratives doivent être simples et accessibles à tous. C'est pourquoi nous avons conçu une plateforme facile à utiliser, même pour les personnes ayant peu de connaissances en informatique.</li>
                <li>Nous nous engageons à garantir une totale transparence à chaque étape de la demande, vous permettant ainsi de savoir exactement où en est votre dossier.</li>
            </ul>
            <h2 class="second-title">Contact et support</h2>
            <p>
                Si vous avez des questions ou besoin d'assistance, 
                notre équipe de support est là pour vous aider. 
                <a href="service.php">N'hésitez pas à nous contacter.</a> 
            </p>
        </main>
     </section>
    <!-- Footer -->
    <?php include("./screens/footer.php"); ?>
</body>

</html>