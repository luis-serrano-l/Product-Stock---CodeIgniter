<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <h1>Edit</h1>
    <form action="<?= base_url('products/edit/' . $product['id']) ?>" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" value="<?= $product['name'] ?>" required><br>
        <label for="qty">Quantity</label>
        <input type="number" step="1" min="1" name="qty" value="<?= $product['qty'] ?>" required><br>
        <input type="submit" value="Submit"><br>
    </form>
    <a href="<?= base_url('products') ?>">Back to products</a>
</body>

</html>