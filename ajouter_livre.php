<?php
require_once 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $categorie = $_POST['categorie'];
    $date_ajout = $_POST['date_ajout'];
    $disponible = isset($_POST['disponible']) ? true : false;

    $stmt = $conn->prepare("INSERT INTO livres (titre, auteur, categorie, date_ajout, disponible) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $titre, $auteur, $categorie, $date_ajout, $disponible);

    if ($stmt->execute()) {
        echo "Livre ajouté avec succès !";
    } else {
        echo "Erreur : " . $conn->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Livre</title>
</head>
<body>
    <h1>Ajouter un Livre</h1>
    <form method="POST">
        <label>Titre :</label>
        <input type="text" name="titre" required><br>

        <label>Auteur :</label>
        <input type="text" name="auteur" required><br>

        <label>Catégorie :</label>
        <input type="text" name="categorie" required><br>

        <label>Date d'ajout :</label>
        <input type="date" name="date_ajout" value="<?= date('Y-m-d') ?>"><br>

        <label>Disponible :</label>
        <input type="checkbox" name="disponible" checked><br>

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
