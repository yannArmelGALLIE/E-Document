<?php 
// session_start();
include("../data/db.php");
$stmt = $bdd->query("SELECT * FROM users");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
                        <thead>
                            <tr>
                            <th>N&deg;</th>
                            <th>Identifiant de l'utilisateur</th>
                        <th>Nom</th>
                        <th>Prénoms</th>   
                        <th>Numéro de téléphone</th>                     
                        <th>email</th>
                        <th>Numero de la CNI</th>
                        <th>Numero NNI</th>
                        <th>Mot de passe</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php $num = 1; ?>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $num++ ?></td>
                                <td><?= htmlspecialchars($user["id"])?></td>
                                <td><?= htmlspecialchars($user["surname"])?></td>
                                <td><?= htmlspecialchars($user["firstName"])?></td>
                                <td><?= htmlspecialchars($user["number"])?></td>
                                <td><?= htmlspecialchars($user["email"])?></td>
                                <td><?= htmlspecialchars($user["numCni"])?></td>
                                <td><?= htmlspecialchars($user["numNni"])?></td>
                                <td><?= htmlspecialchars($user["password"])?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>