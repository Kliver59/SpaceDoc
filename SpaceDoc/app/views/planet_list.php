<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorer l'Espace</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>Bienvenue dans l'Explorer de l'Espace !</h1>
    <div class="planetes-container">
        <?php foreach ($planetes as $planete): ?>
            <div class="planete">
                <h2><?= htmlspecialchars($planete->getNom()) ?></h2>
                <p><?= htmlspecialchars($planete->getDescription()) ?></p>
                <img src="/public/images/<?= htmlspecialchars($planete->getImage()) ?>" alt="<?= htmlspecialchars($planete->getNom()) ?>">
            </div>
        <?php endforeach; ?>
    </div>
    <script src="/public/js/script.js"></script>
</body>
</html>