<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktkatalog</title>
</head>

<body>
    <h1>Produktkatalog</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <strong><?= htmlspecialchars($product->getName()) ?></strong><br>
                Kategori: <?= htmlspecialchars($product->getCategory()) ?><br>
                Pris: <?= number_format($product->getPrice(), 2, ',', ' ') ?> kr
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>