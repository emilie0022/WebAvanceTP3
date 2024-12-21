<h1>Journal des activités</h1>
<table>
    <thead>
        <tr>
            <th>Utilisateur</th>
            <th>Action</th>
            <th>Adresse IP</th>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= htmlspecialchars($log['username']) ?></td>
                <td><?= htmlspecialchars($log['action']) ?></td>
                <td><?= htmlspecialchars($log['ip_address']) ?></td>
                <td><?= htmlspecialchars($log['created_at']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
