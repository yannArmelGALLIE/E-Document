<?php
session_start();
include("./data/db.php");

// On filtre les requests par le numéro CNI
$numCni = $_SESSION["user"];

$stmt = $bdd->prepare("SELECT * FROM request WHERE numCni = :numCni");
$stmt->execute(["numCni" => $numCni]);

$requests = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
    <script src="script/status_page.js" defer></script>
    <title>Accueil | E-Document</title>
</head>

<body>
    <!-- Header -->
    <?php include("./screens/header.php"); ?>
    <!-- Body -->
     <section class="section-main">
        <main class="main-table">
            <div class="title-area">
                <h1 class="title">Consultez l'état et l'historique de vos demandes.</h1>
            </div>
            <div class="table-area">
            <table>
                <thead>
                    <tr>
                        <th>N&deg;</th>
                        <th>Nom du document</th>
                        <th>Date de demande</th>                        
                        <th>Heure de demande</th>
                        <th>Date de reception</th>
                        <th>Heure de reception</th>
                        <th>Status</th>
                        <th>Téléchargement</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1; ?>
                    <?php foreach ($requests as $request): ?>
                    <tr>
                        <td><?= $num++ ?></td>
                        <td><?= htmlspecialchars($request["demand"])?></td>
                        <td><?= htmlspecialchars($request["requestDate"])?></td>
                        <td><?= htmlspecialchars($request["requestTime"])?></td>
                        <td><?= htmlspecialchars($request["receptionDate"])?></td>
                        <td><?= htmlspecialchars($request["receptionTime"])?></td>
                        <td><?= htmlspecialchars($request["status"])?></td>
                        <td>
                            <?php if ($request["filePath"]): ?>
                                <a href="<?= htmlspecialchars($request["filePath"]) ?>" download>Télécharger</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            </div>
        </main>
     </section>
    <!-- Footer -->
    <?php include("./screens/footer.php"); ?>
</body>

</html>