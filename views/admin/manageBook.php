<?php
$isEdit = isset($book); // Détermine si on est en mode édition
?>

<h1><?= $isEdit ? 'Modifier un livre' : 'Ajouter un livre' ?></h1>

<form action="<?= $isEdit ? "/admin/updateBook/{$book['id']}" : '/admin/storeBook' ?>" method="POST">
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" value="<?= $book['title'] ?? '' ?>" required>

    <label for="author">Auteur :</label>
    <input type="text" name="author" id="author" value="<?= $book['author'] ?? '' ?>" required>

    <label for="description">Description :</label>
    <textarea name="description" id="description" required><?= $book['description'] ?? '' ?></textarea>

    <button type="submit"><?= $isEdit ? 'Modifier' : 'Ajouter' ?></button>
</form>
