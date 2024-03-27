<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create product</title>
</head>

<body>
    <h1>Create product</h1>
    <?= form_open('products/store') ?>
    <label for="name">Name</label>
    <input type="text" name="name" required><br>
    <label for="qty">Quantity</label>
    <input type="number" step="1" min="1" name="qty" required><br>
    <input type="submit" value="Submit">
    <?= form_close() ?>
    <a href="<?= base_url('products')?>">Back to products</a>
</body>

</html>