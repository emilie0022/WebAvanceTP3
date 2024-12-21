<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>
    <h1>Bienvenue dans la librairie</h1>
    <ul>
        <?php foreach ($books as $book): ?>
        <li>
            <a href="/webAvance/tp3/books/details/<?= $book['id']; ?>">
                <?= htmlspecialchars($book['title']); ?> par <?= htmlspecialchars($book['author']); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
