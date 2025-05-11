<?php 
// session_start();

include("../data/db.php");
$stmt = $bdd->query("SELECT * FROM request");
$requests = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST["send_file"]) && isset($_FILES["document"])) {
    $numCni = $_POST["numCni"];
    $file = $_FILES["document"];

    // Vérifie que le fichier est valide
    if ($file["error"] === 0) {
        $uploadDir = "./uploads/";
        if (!file_exists($uploadDir)) mkdir($uploadDir, 0777, true);

        $fileName = basename($file["name"]);
        $targetPath = $uploadDir . time() . "_" . $fileName;

        if (move_uploaded_file($file["tmp_name"], $targetPath)) {
            // Enregistrer le chemin dans la base de données
            $stmt = $bdd->prepare("UPDATE request SET filePath = :path WHERE numCni = :numCni");
            $stmt->execute([
                "path" => $targetPath,
                "numCni" => $numCni
            ]);
        } 
    } 
}


if (isset($_POST["numCni"], $_POST["status"])) {
    $numCni = $_POST["numCni"];
    $status = $_POST["status"];

    if ($status === "Document envoyé") {
        $receptionDate = date("Y-m-d");
        $receptionTime = date("H:i:s");

        $stmt = $bdd->prepare("UPDATE request SET status = :status, receptionDate = :receptionDate, receptionTime = :receptionTime WHERE numCni = :numCni");
        $stmt->execute([
            "status" => $status,
            "receptionDate" => $receptionDate,
            "receptionTime" => $receptionTime,
            "numCni" => $numCni
        ]);
    } else {
        $stmt = $bdd->prepare("UPDATE request SET status = :status WHERE numCni = :numCni");
        $stmt->execute([
            "status" => $status,
            "numCni" => $numCni
        ]);
    }

} 
?>
<table>
                        <thead>
                            <tr>
                            <th>N&deg;</th>
                            <th>Numero de CNI de L'utilisateur</th>
                        <th>Noms des documents</th>
                        <th>Date de demande</th>                        
                        <th>Heure de demande</th>
                        <th>Date de reception</th>
                        <th>Heure de reception</th>
                        <th>Envoyer fichiers</th>
                        <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $num = 1; ?>
                        <?php foreach ($requests as $request): ?>
                            <tr>
                                <td><?= $num++ ?></td>
                                <td><?= htmlspecialchars($request["numCni"])?></td>
                                <td><?= htmlspecialchars($request["demand"])?></td>
                                <td><?= htmlspecialchars($request["requestDate"])?></td>
                                <td><?= htmlspecialchars($request["requestTime"])?></td>
                                <td><?= htmlspecialchars($request["receptionDate"])?></td>
                                <td><?= htmlspecialchars($request["receptionTime"])?></td>
                                <td>
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="numCni" value="<?= htmlspecialchars($request["numCni"]) ?>">
                                        <input type="file" name="document">
                                        <button type="submit" name="send_file">Envoyer</button>
                                    </form>
                                </td>
                                <td>    
                                    <form method="POST" action="">
                                    <input type="hidden" name="numCni" value="<?= htmlspecialchars($request["numCni"]) ?>">
                                    <select name="status" onchange="this.form.submit()">
                                            <option value="En cours d'envoie" <?= $request["status"] == "En cours d'envoie" ? "selected" : "" ?>>En cours d'envoie</option>
                                            <option value="Demande reçue" <?= $request["status"] == "Demande reçue" ? "selected" : "" ?>>Demande reçue</option>
                                            <option value="Document envoyé" <?= $request["status"] == "Document envoyé" ? "selected" : "" ?>>Document envoyé</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>