<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploader une image</title>
    <link rel="stylesheet" href="<?php echo '/webAvance/tp3/css/style.css'; ?>">
</head>
<body>
    <?php include __DIR__ . '/../layout/navbar.php'; ?>
    <h1>Uploader une image</h1>
    <form action="/webAvance/tp3/admin/uploadImage" method="POST" enctype="multipart/form-data">
        <label for="image">Sélectionnez une image :</label>
        <input type="file" name="image" id="image" required>
        <button type="submit">Téléverser</button>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?= htmlspecialchars($error); ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
