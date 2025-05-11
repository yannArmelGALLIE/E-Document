<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/style/style.css">
    <script src="../script/admin_page.js" defer></script>
    <title>E-Document | Admin | request</title>
</head>
<body>
<div class="container">
    <?php include("./screens/navbar-admin.php") ?>
        <div class="main">
            <?php include("./screens/search.php") ?>

            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Demades récentes</h2>
                        <a href="#" class="btn">Voir tout</a>
                    </div>
                    <?php include("./screens/table-users.php") ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>