<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $product['name'] ?></title>
</head>
<body>
    <h2>Id: <?= $product['id'] ?></h2>
    <h2>Product: <?= $product['name'] ?></h2>
    <h2>Quantity: <?= $product['qty'] ?></h2>
    <a href="<?= base_url('products') ?>">Back to products</a>
</body>
</html>