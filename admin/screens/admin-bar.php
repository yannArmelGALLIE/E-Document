<?php 
// session_start();
include("../data/db.php");
$stmt = $bdd->query("SELECT * FROM admin");
$admins = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <title>E-Document | Admin | request</title>
</head>
<body>
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Administrateurs</h2>
                    </div>

                    <table>
                        <?php foreach($admins as $admin): ?>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="" alt=""></div>
                            </td>
                            <td>
                                <h4><?= htmlspecialchars($admin["surname"]) ?><br> <span><?= htmlspecialchars($admin["status"]) ?></span></h4>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>