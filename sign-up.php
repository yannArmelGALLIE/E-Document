<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.png" sizes="32x32">
    <link rel="stylesheet" href="./assets/style/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <script src="client/client_sign-up.js" defer></script>
    <script src="script/stage-script.js" defer></script>
    <title>S'inscrire | E-Document</title>
</head>

<body>
    <!-- Body -->
    <section class="section-main">
        <main class="main-sign-up">
        <div class="title-area">
            <h1 class="title">Veuillez creer un compte pour continuer.</h1>
        </div>
        <div class="form-sign-up">
            <form action="./data/sign-up-traitement.php" method="POST" id="signUpForm">
                <div>
                    <div id="stage1" class="stage1">
                        <label for="">
                            <span class="material-symbols-outlined">person</span>
                            Nom
                        </label>
                        <input type="text" name="surname" id="surname" >
                        <label for="">
                            <span class="material-symbols-outlined">person</span>
                            Prenoms
                        </label>
                        <input type="text" name="firstname" id="firstname" >
                        <label for="">
                            <span class="material-symbols-outlined">alternate_email</span>
                            Email
                        </label>
                        <input type="email" name="email" id="email" >
                    </div>
                    <div id="stage2" class="stage2 non-active-input">
                        <label for="">
                            <span class="material-symbols-outlined">phone_iphone</span>
                            Numero de téléphone
                        </label><br>
                        <input type="number" name="number" id="number" >
                        <label for="">
                            <span class="material-symbols-outlined">pin</span>
                            Numero de la CNI 
                        </label><br>
                        <input type="text" name="num-cni" id="numCni"  >
                        <label for="">
                            <span class="material-symbols-outlined">pin</span>
                            Numero NNI
                        </label><br>
                        <input type="number" name="num-nni" id="numNni"  >
                    </div>
                    <div id="stage3" class="stage3 non-active-input">
                        <label for="">
                            <span class="material-symbols-outlined">lock</span>
                            Mot de passe</label><br>
                        <input type="password" name="password"  id="password" ><br>
                        <label for="">
                            <span class="material-symbols-outlined">lock</span>
                            Confirmation du mot de passe
                        </label><br>
                        <input type="password" name="confirm-password"  id="confirmPassword" ><br>
                    </div>
                </div>
                <div class="button">
                    <button type="button" id="prev" class="prev">
                        <span class="material-symbols-outlined">arrow_back</span>
                        Précedent
                    </button>
                    <p id="stage">Etape 1</p>
                    <button type="button" id="next" class="next">
                        Suivant
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
                <input type="submit" name="submit" value="Se connecter"><br>
                <div id="error"></div>
                <a href="sign-in.php">J'ai déjà un compte</a>
            </form>
        </div>
        </main>
     </section>
</body>

</html>