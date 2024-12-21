<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un livre</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>
    <h1>Ajouter un livre</h1>
    <form action="/webAvance/tp3/admin/storeBook" method="POST">
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required>
        <label for="author">Auteur :</label>
        <input type="text" name="author" id="author" required>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required></textarea>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>
