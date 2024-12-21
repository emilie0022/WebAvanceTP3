<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du livre</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>

    <h1>Détails du livre</h1>
    <p><strong>Titre :</strong> <?= htmlspecialchars($book['title']); ?></p>
    <p><strong>Auteur :</strong> <?= htmlspecialchars($book['author']); ?></p>
    <p><strong>Description :</strong> <?= htmlspecialchars($book['description']); ?></p>
    <a href="/webAvance/tp3/">Retour à la liste</a>


</body>
</html>
