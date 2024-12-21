<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>
    <h1>Modifier un livre</h1>
    <form action="/webAvance/tp3/admin/updateBook/<?= $book['id']; ?>" method="POST">
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="<?= htmlspecialchars($book['title']); ?>" required>
        <label for="author">Auteur :</label>
        <input type="text" name="author" id="author" value="<?= htmlspecialchars($book['author']); ?>" required>
        <label for="description">Description :</label>
        <textarea name="description" id="description" required><?= htmlspecialchars($book['description']); ?></textarea>
        <button type="submit">Modifier</button>
    </form>
</body>
</html>
