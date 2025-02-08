<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>

<body>
    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <strong><?= htmlspecialchars($product->getName()) ?></strong><br>
                Category: <?= htmlspecialchars($product->getCategory()) ?><br>
                Price: <?= number_format($product->getPrice(), 2, ',', ' ') ?> SEK
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>