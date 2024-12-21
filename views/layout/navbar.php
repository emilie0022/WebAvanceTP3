<nav>
    <ul>
        <li><a href="/webAvance/tp3/">Accueil</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <?php if ($_SESSION['user']['role'] === 'admin'): ?>
                <li><a href="/webAvance/tp3/admin/dashboard">Administration</a></li>
                <li><a href="/webAvance/tp3/admin/addBook">Ajouter un livre</a></li>
            <?php endif; ?>
            <li><a href="/webAvance/tp3/auth/logout">Déconnexion</a></li>
            <li>Bienvenue, <?= htmlspecialchars($_SESSION['user']['username']); ?>!</li>
        <?php else: ?>
            <li><a href="/webAvance/tp3/auth/login">Se connecter</a></li>
        <?php endif; ?>
    </ul>
</nav>
