<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un livre</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>
    <h1>Confirmer la suppression</h1>
    <p>Êtes-vous sûr de vouloir supprimer le livre suivant ?</p>
    <p><strong>Titre :</strong> <?= htmlspecialchars($book['title']); ?></p>
    <p><strong>Auteur :</strong> <?= htmlspecialchars($book['author']); ?></p>
    <form action="/webAvance/tp3/admin/deleteBookConfirm/<?= $book['id']; ?>" method="POST">
        <button type="submit">Supprimer</button>
        <a href="/webAvance/tp3/admin/dashboard">Annuler</a>
    </form>
</body>
</html>
