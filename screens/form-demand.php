<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="../assets/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="./script/burger-menu.js" defer></script>
    <script src="./script/scroll-bar.js" defer></script>
    <script src="./script/active-link.js" defer></script>
    <title>Accueil | E-Document</title>
</head>

<body>
    <!-- Header -->
    <!-- Body -->
     <section class="section-main">
        <main>
            <div class="title-area">
                <h1 class="title">Une seule plateforme pour toutes vos demandes administratives.</h1>
                <h2 class="second-title">Demandez. Suivez. Recevez.</h2>
            </div>
            <div class="form-demand">
                <form action="../data/submit-demand.php" method="POST">
                    <fieldset>
                        <legend>Citoyenneté - Etat Civil</legend>
                        <input type="checkbox" name="checkboxes[]" value="proofOfIdentity" id="proofOfIdentity"><label>Justificatif d'identité</label><br>
                        <input type="checkbox" name="checkboxes[]" value="powerOfAttorney" id="powerOfAttorney"><label>Procuration</label><br>
                        <input type="checkbox" name="checkboxes[]" value="proofOfResidence" id="proofOfResidence"><label>Certificat de résidence</label><br>
                        <input type="checkbox" name="checkboxes[]" value="proofOfLife" id="proofOfLife"><label>Preuve de vie</label><br>
                        <input type="checkbox" name="checkboxes[]" value="voterRegistrationVerification" id="voterRegistrationVerification"><label>Vérification de la liste électorale</label><br>
                        <input type="checkbox" name="checkboxes[]" value="birthCertificate" id="birthCertificate"><label>Acte de naissance</label><br>
                        <input type="checkbox" name="checkboxes[]" value="marriageCertificate" id="marriageCertificate"><label>Acte de mariage</label><br>
                        <input type="checkbox" name="checkboxes[]" value="deathCertificate" id="deathCertificate"><label>Acte de décès</label>
                    </fieldset>
                    <fieldset>
                        <legend>Justice</legend>
                        <input type="checkbox" name="checkboxes[]" value="certificate0fNationality" id="certificate0fNationality"><label>Certificat de nationnalité</label><br>
                        <input type="checkbox" name="checkboxes[]" value="criminalRecord" id="criminalRecord"><label>Casier Judiciaire</label>
                    </fieldset>
                    <input type="submit" value="Soumettre" name="submit">
                </form>
            </div>
        </main>
     </section>
     <!-- Footer -->
</body>

</html>